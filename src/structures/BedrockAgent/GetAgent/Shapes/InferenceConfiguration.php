<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximumLength
 * @property list<string> $stopSequences
 * @property float $temperature
 * @property int $topK
 * @property float $topP
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maximumLength?: int,
     *     stopSequences?: list<string>,
     *     temperature?: float,
     *     topK?: int,
     *     topP?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
