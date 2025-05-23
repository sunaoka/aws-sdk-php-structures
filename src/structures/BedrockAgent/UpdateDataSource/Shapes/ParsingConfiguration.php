<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockDataAutomationConfiguration|null $bedrockDataAutomationConfiguration
 * @property BedrockFoundationModelConfiguration|null $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION' $parsingStrategy
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockDataAutomationConfiguration?: BedrockDataAutomationConfiguration|null,
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration|null,
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
