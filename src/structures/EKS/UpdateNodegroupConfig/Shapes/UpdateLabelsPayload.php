<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $addOrUpdateLabels
 * @property list<string>|null $removeLabels
 */
class UpdateLabelsPayload extends Shape
{
    /**
     * @param array{
     *     addOrUpdateLabels?: array<string, string>|null,
     *     removeLabels?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
