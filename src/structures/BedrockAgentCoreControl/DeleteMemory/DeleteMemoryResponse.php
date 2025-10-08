<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteMemory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $memoryId
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|null $status
 */
class DeleteMemoryResponse extends Response
{
}
