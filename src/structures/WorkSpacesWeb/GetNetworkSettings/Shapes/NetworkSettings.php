<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $associatedPortalArns
 * @property string $networkSettingsArn
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class NetworkSettings extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>|null,
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
