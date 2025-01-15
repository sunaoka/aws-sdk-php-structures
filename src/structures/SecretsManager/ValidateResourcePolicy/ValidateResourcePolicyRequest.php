<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ValidateResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SecretId
 * @property string $ResourcePolicy
 */
class ValidateResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     SecretId?: string|null,
     *     ResourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
