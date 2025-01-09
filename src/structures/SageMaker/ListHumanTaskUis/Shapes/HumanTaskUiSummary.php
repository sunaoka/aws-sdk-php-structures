<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHumanTaskUis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanTaskUiName
 * @property string $HumanTaskUiArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class HumanTaskUiSummary extends Shape
{
    /**
     * @param array{
     *     HumanTaskUiName: string,
     *     HumanTaskUiArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
