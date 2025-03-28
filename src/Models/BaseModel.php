<?php

namespace Slowlyo\OwlAdmin\Models;

use Illuminate\Database\Eloquent\Model;
use Slowlyo\OwlAdmin\Admin;

class BaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setConnection(Admin::config('admin.database.connection'));

        parent::__construct($attributes);
    }

    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format($this->getDateFormat());
    }
}
