<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property ParsingPrompt $parsingPrompt
 */
class BedrockFoundationModelConfigurationForParsing extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     parsingPrompt?: ParsingPrompt
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
