<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $serviceNetworkIdentifier
 */
class UpdateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     authType: 'NONE'|'AWS_IAM',
     *     serviceNetworkIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
