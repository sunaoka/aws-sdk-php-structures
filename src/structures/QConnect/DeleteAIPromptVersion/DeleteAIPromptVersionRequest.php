<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPromptVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiPromptId
 * @property int<1, max> $versionNumber
 */
class DeleteAIPromptVersionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiPromptId: string,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
