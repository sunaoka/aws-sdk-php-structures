<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelConfigurationForParsing|null $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL' $parsingStrategy
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfigurationForParsing|null,
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
