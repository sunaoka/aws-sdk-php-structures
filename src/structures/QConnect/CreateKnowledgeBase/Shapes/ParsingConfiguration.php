<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelConfigurationForParsing $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL' $parsingStrategy
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfigurationForParsing,
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
