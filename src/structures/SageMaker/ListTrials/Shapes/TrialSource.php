<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $SourceType
 */
class TrialSource extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     SourceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
