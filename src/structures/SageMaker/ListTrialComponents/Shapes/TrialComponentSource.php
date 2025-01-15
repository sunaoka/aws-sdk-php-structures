<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string|null $SourceType
 */
class TrialComponentSource extends Shape
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
