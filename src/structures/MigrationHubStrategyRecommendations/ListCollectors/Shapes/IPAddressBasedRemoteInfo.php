<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NTLM'|'SSH'|'CERT' $authType
 * @property string $ipAddressConfigurationTimeStamp
 * @property 'LINUX'|'WINDOWS' $osType
 */
class IPAddressBasedRemoteInfo extends Shape
{
    /**
     * @param array{
     *     authType?: 'NTLM'|'SSH'|'CERT',
     *     ipAddressConfigurationTimeStamp?: string,
     *     osType?: 'LINUX'|'WINDOWS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
