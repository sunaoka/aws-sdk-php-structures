<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockDataAutomationConfiguration $bedrockDataAutomationConfiguration
 * @property BedrockFoundationModelConfiguration $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION' $parsingStrategy
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockDataAutomationConfiguration?: BedrockDataAutomationConfiguration,
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration,
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
