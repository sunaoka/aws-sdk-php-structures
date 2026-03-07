<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataStreamArn
 * @property list<ContentConfiguration> $contentConfigurations
 */
class KinesisResource extends Shape
{
    /**
     * @param array{
     *     dataStreamArn: string,
     *     contentConfigurations: list<ContentConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
