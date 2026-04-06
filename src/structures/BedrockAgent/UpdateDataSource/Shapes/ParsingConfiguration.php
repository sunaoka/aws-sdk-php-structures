<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelConfiguration|null $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL' $parsingStrategy
 */
class ParsingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration|null,
     *     parsingStrategy: 'BEDROCK_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
