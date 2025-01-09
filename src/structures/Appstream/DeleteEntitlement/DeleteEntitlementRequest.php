<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $StackName
 */
class DeleteEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
