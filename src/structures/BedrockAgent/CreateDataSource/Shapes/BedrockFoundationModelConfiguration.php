<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property 'MULTIMODAL'|null $parsingModality
 * @property ParsingPrompt|null $parsingPrompt
 */
class BedrockFoundationModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     parsingModality?: 'MULTIMODAL'|null,
     *     parsingPrompt?: ParsingPrompt|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
