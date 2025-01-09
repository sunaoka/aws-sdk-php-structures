<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanLoopName
 * @property string $FlowDefinitionArn
 * @property HumanLoopDataAttributes $DataAttributes
 */
class HumanLoopConfig extends Shape
{
    /**
     * @param array{
     *     HumanLoopName: string,
     *     FlowDefinitionArn: string,
     *     DataAttributes?: HumanLoopDataAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
