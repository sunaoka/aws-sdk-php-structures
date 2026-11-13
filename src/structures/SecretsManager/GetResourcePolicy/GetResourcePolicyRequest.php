<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $PolicyName
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
