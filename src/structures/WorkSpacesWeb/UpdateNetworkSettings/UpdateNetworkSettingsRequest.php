<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $networkSettingsArn
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class UpdateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     networkSettingsArn: string,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
