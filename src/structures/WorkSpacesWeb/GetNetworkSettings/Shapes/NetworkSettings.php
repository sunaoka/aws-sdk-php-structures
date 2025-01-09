<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $associatedPortalArns
 * @property string $networkSettingsArn
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class NetworkSettings extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>,
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
