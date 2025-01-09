<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrailVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property string $description
 * @property string $clientRequestToken
 */
class CreateGuardrailVersionRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     description?: string,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
