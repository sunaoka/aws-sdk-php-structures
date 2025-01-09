<?php

namespace Sunaoka\Aws\Structures;

trait ArrayTrait
{
    /**
     * @var array<string, mixed>
     */
    protected $__data = [];

    public function toArray()
    {
        $result = $this->__data;

        array_walk_recursive($result, function (&$value) {
            if ($value instanceof Arrayable) {
                $value = $value->toArray();
            }
        });

        return $result;
    }
}
