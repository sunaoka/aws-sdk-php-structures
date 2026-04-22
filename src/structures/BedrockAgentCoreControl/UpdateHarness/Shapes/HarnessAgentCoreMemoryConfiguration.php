<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $actorId
 * @property int|null $messagesCount
 * @property array<string, HarnessAgentCoreMemoryRetrievalConfig>|null $retrievalConfig
 */
class HarnessAgentCoreMemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     actorId?: string|null,
     *     messagesCount?: int|null,
     *     retrievalConfig?: array<string, HarnessAgentCoreMemoryRetrievalConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
