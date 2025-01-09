<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $networkSettingsArn
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class UpdateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     networkSettingsArn: string,
     *     securityGroupIds?: list<string>,
     *     subnetIds?: list<string>,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
