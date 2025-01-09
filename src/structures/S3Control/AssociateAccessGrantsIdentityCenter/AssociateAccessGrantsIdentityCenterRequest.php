<?php

namespace Sunaoka\Aws\Structures\S3Control\AssociateAccessGrantsIdentityCenter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $IdentityCenterArn
 */
class AssociateAccessGrantsIdentityCenterRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     IdentityCenterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
