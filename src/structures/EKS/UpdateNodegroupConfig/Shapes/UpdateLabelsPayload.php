<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $addOrUpdateLabels
 * @property list<string> $removeLabels
 */
class UpdateLabelsPayload extends Shape
{
    /**
     * @param array{
     *     addOrUpdateLabels?: array<string, string>,
     *     removeLabels?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
