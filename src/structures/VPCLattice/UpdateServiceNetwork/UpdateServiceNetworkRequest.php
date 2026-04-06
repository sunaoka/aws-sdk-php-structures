<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkIdentifier
 * @property 'NONE'|'AWS_IAM' $authType
 */
class UpdateServiceNetworkRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkIdentifier: string,
     *     authType: 'NONE'|'AWS_IAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
