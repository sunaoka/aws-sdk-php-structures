<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectionName
 * @property array<string, string> $CollectionParameters
 */
class CollectionConfiguration extends Shape
{
    /**
     * @param array{
     *     CollectionName?: string,
     *     CollectionParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
