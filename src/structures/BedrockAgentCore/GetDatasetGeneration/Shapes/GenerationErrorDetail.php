<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property int<1, max>|null $count
 * @property list<string>|null $sessionIds
 */
class GenerationErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     count?: int<1, max>|null,
     *     sessionIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
