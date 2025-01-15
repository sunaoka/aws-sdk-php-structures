<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Taint>|null $addOrUpdateTaints
 * @property list<Taint>|null $removeTaints
 */
class UpdateTaintsPayload extends Shape
{
    /**
     * @param array{
     *     addOrUpdateTaints?: list<Taint>|null,
     *     removeTaints?: list<Taint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
