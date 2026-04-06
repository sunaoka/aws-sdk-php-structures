<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateSecurityKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Key
 * @property string|null $ClientToken
 */
class AssociateSecurityKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Key: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
