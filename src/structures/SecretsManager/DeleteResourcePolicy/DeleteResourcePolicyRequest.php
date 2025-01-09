<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
