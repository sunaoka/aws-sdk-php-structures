<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTIMODAL'|null $parsingModality
 */
class BedrockDataAutomationConfiguration extends Shape
{
    /**
     * @param array{parsingModality?: 'MULTIMODAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
