<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property 'MULTIMODAL' $parsingModality
 * @property ParsingPrompt $parsingPrompt
 */
class BedrockFoundationModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     parsingModality?: 'MULTIMODAL',
     *     parsingPrompt?: ParsingPrompt
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
