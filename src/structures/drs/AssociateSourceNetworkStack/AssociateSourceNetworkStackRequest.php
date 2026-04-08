<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceNetworkID
 * @property string $cfnStackName
 */
class AssociateSourceNetworkStackRequest extends Request
{
    /**
     * @param array{
     *     sourceNetworkID: string,
     *     cfnStackName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
