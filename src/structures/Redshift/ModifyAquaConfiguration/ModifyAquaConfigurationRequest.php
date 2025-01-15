<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyAquaConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property 'enabled'|'disabled'|'auto'|null $AquaConfigurationStatus
 */
class ModifyAquaConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
