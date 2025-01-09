<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4096> $maximumLength
 * @property list<string> $stopSequences
 * @property float $temperature
 * @property int<0, 500> $topK
 * @property float $topP
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maximumLength?: int<0, 4096>,
     *     stopSequences?: list<string>,
     *     temperature?: float,
     *     topK?: int<0, 500>,
     *     topP?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
