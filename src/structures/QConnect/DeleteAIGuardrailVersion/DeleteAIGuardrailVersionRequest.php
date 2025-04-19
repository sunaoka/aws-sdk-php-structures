<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiGuardrailId
 * @property int<1, max> $versionNumber
 */
class DeleteAIGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiGuardrailId: string,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
