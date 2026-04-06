<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property int<1, max> $versionNumber
 */
class DeleteAIAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
