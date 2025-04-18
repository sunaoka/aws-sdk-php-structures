<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEDROCK_FOUNDATION_MODEL' $parsingStrategy
 * @property BedrockFoundationModelConfigurationForParsing|null $bedrockFoundationModelConfiguration
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL',
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfigurationForParsing|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
