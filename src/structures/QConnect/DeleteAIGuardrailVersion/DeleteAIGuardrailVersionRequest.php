<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property int<1, max> $versionNumber
 */
class DeleteAIGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
     *     assistantId: string,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
