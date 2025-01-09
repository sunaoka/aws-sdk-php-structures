<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceConnectEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SubnetId
 * @property list<string> $SecurityGroupIds
 * @property bool $PreserveClientIp
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateInstanceConnectEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SubnetId: string,
     *     SecurityGroupIds?: list<string>,
     *     PreserveClientIp?: bool,
     *     ClientToken?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
