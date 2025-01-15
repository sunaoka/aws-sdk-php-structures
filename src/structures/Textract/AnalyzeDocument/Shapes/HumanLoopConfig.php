<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanLoopName
 * @property string $FlowDefinitionArn
 * @property HumanLoopDataAttributes|null $DataAttributes
 */
class HumanLoopConfig extends Shape
{
    /**
     * @param array{
     *     HumanLoopName: string,
     *     FlowDefinitionArn: string,
     *     DataAttributes?: HumanLoopDataAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
