<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $engineVersion
 * @property Shapes\HighAvailabilityConfig $highAvailabilityConfig
 * @property string $instanceType
 * @property string $kmsKeyId
 * @property string $name
 * @property 'ipv4'|'dual' $networkType
 * @property string $preferredMaintenanceWindow
 * @property bool $publiclyAccessible
 * @property list<string> $securityGroupIds
 * @property list<Shapes\StorageConfiguration> $storageConfigurations
 * @property list<string> $subnetIds
 * @property array<string, string> $tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     engineType: 'microfocus'|'bluage',
     *     engineVersion?: string,
     *     highAvailabilityConfig?: Shapes\HighAvailabilityConfig,
     *     instanceType: string,
     *     kmsKeyId?: string,
     *     name: string,
     *     networkType?: 'ipv4'|'dual',
     *     preferredMaintenanceWindow?: string,
     *     publiclyAccessible?: bool,
     *     securityGroupIds?: list<string>,
     *     storageConfigurations?: list<Shapes\StorageConfiguration>,
     *     subnetIds?: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
