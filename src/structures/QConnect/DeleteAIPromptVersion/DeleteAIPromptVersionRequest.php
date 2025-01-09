<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property int $versionNumber
 */
class DeleteAIPromptVersionRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     versionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
