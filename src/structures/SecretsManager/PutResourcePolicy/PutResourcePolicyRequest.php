<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ResourcePolicy
 * @property string|null $PolicyName
 * @property bool|null $BlockPublicPolicy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ResourcePolicy: string,
     *     PolicyName?: string|null,
     *     BlockPublicPolicy?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
