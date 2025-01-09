<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkSettingsArn
 * @property string $vpcId
 */
class NetworkSettingsSummary extends Shape
{
    /**
     * @param array{
     *     networkSettingsArn: string,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
