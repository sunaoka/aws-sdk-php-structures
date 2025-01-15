<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string|null $SourceType
 */
class TrialSource extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     SourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
