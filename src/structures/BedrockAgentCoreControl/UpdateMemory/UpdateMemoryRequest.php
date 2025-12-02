<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $memoryId
 * @property string|null $description
 * @property int<3, 365>|null $eventExpiryDuration
 * @property string|null $memoryExecutionRoleArn
 * @property Shapes\ModifyMemoryStrategies|null $memoryStrategies
 */
class UpdateMemoryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     memoryId: string,
     *     description?: string|null,
     *     eventExpiryDuration?: int<3, 365>|null,
     *     memoryExecutionRoleArn?: string|null,
     *     memoryStrategies?: Shapes\ModifyMemoryStrategies|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
