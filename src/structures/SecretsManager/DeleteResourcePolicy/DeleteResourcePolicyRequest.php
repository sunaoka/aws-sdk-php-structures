<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $PolicyName
 */
class DeleteResourcePolicyRequest extends Request
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
