<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property ParsingPrompt|null $parsingPrompt
 * @property 'MULTIMODAL'|null $parsingModality
 */
class BedrockFoundationModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     parsingPrompt?: ParsingPrompt|null,
     *     parsingModality?: 'MULTIMODAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
