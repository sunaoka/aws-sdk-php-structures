<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Taint> $addOrUpdateTaints
 * @property list<Taint> $removeTaints
 */
class UpdateTaintsPayload extends Shape
{
    /**
     * @param array{
     *     addOrUpdateTaints?: list<Taint>,
     *     removeTaints?: list<Taint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
