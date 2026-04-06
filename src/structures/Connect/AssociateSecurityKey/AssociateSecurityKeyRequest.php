<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateSecurityKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Key
 */
class AssociateSecurityKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
