<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION' $parsingStrategy
 * @property BedrockFoundationModelConfiguration|null $bedrockFoundationModelConfiguration
 * @property BedrockDataAutomationConfiguration|null $bedrockDataAutomationConfiguration
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'|'BEDROCK_DATA_AUTOMATION',
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration|null,
     *     bedrockDataAutomationConfiguration?: BedrockDataAutomationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
