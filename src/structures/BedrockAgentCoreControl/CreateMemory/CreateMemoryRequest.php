<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string|null $description
 * @property string|null $encryptionKeyArn
 * @property string|null $memoryExecutionRoleArn
 * @property int<7, 365> $eventExpiryDuration
 * @property list<Shapes\MemoryStrategyInput>|null $memoryStrategies
 * @property array<string, string>|null $tags
 */
class CreateMemoryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     description?: string|null,
     *     encryptionKeyArn?: string|null,
     *     memoryExecutionRoleArn?: string|null,
     *     eventExpiryDuration: int<7, 365>,
     *     memoryStrategies?: list<Shapes\MemoryStrategyInput>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
