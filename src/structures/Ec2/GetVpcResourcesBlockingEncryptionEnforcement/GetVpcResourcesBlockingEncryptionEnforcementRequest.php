<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpcResourcesBlockingEncryptionEnforcement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetVpcResourcesBlockingEncryptionEnforcementRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
