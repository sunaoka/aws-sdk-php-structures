<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cfnStackName
 * @property string $sourceNetworkID
 */
class AssociateSourceNetworkStackRequest extends Request
{
    /**
     * @param array{
     *     cfnStackName: string,
     *     sourceNetworkID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
