<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 */
class NetworkSettings extends Shape
{
    /**
     * @param array{
     *     networkSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
