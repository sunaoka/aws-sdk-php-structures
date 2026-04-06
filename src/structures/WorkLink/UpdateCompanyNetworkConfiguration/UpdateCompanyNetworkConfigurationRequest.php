<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateCompanyNetworkConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 */
class UpdateCompanyNetworkConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
