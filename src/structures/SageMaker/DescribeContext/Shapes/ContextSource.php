<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceUri
 * @property string $SourceType
 * @property string $SourceId
 */
class ContextSource extends Shape
{
    /**
     * @param array{
     *     SourceUri: string,
     *     SourceType?: string,
     *     SourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
