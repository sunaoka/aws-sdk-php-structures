<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkSettingsArn
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property string|null $clientToken
 */
class UpdateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     networkSettingsArn: string,
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
