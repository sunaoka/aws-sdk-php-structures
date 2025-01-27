<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 8192>|null $maximumLength
 * @property list<string>|null $stopSequences
 * @property float|null $temperature
 * @property int<0, 500>|null $topK
 * @property float|null $topP
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maximumLength?: int<0, 8192>|null,
     *     stopSequences?: list<string>|null,
     *     temperature?: float|null,
     *     topK?: int<0, 500>|null,
     *     topP?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
