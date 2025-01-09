<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTIMODAL' $parsingModality
 */
class BedrockDataAutomationConfiguration extends Shape
{
    /**
     * @param array{parsingModality?: 'MULTIMODAL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
