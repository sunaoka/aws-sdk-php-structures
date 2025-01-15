<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceUri
 * @property string|null $SourceType
 * @property string|null $SourceId
 */
class ContextSource extends Shape
{
    /**
     * @param array{
     *     SourceUri: string,
     *     SourceType?: string|null,
     *     SourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
