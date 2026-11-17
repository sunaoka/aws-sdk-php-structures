<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $extractionPrompt
 * @property int<1, 1000>|null $extractEveryNMessages
 * @property int<1, 80000>|null $extractEveryNTokens
 * @property int<1, 86400>|null $idleTimeoutSeconds
 * @property int<0, 20>|null $extractionSeedTopK
 * @property int<0, 20>|null $extractionSeedRecentN
 * @property bool|null $consolidationEnabled
 */
class MemoryStrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     extractionPrompt?: string|null,
     *     extractEveryNMessages?: int<1, 1000>|null,
     *     extractEveryNTokens?: int<1, 80000>|null,
     *     idleTimeoutSeconds?: int<1, 86400>|null,
     *     extractionSeedTopK?: int<0, 20>|null,
     *     extractionSeedRecentN?: int<0, 20>|null,
     *     consolidationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
