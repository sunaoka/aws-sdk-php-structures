<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
