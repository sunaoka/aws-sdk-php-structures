<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|null $PolicyName
 */
class GetKeyPolicyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
