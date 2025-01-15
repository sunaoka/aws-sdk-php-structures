<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NTLM'|'SSH'|'CERT'|null $authType
 * @property string|null $ipAddressConfigurationTimeStamp
 * @property 'LINUX'|'WINDOWS'|null $osType
 */
class IPAddressBasedRemoteInfo extends Shape
{
    /**
     * @param array{
     *     authType?: 'NTLM'|'SSH'|'CERT'|null,
     *     ipAddressConfigurationTimeStamp?: string|null,
     *     osType?: 'LINUX'|'WINDOWS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
