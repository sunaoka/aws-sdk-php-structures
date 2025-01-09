<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ResourcePolicy
 * @property bool $BlockPublicPolicy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ResourcePolicy: string,
     *     BlockPublicPolicy?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
