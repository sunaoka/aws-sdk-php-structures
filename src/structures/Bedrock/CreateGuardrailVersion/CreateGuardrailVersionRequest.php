<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string|null $description
 * @property string|null $clientRequestToken
 */
class CreateGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     description?: string|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
