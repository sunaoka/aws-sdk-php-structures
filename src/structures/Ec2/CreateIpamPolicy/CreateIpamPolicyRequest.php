<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property string $IpamId
 */
class CreateIpamPolicyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     IpamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
