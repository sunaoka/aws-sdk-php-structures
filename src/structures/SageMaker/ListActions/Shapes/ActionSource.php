<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceUri
 * @property string $SourceType
 * @property string $SourceId
 */
class ActionSource extends Shape
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
