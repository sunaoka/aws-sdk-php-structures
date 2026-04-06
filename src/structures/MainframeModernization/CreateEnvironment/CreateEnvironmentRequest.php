<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string|null $engineVersion
 * @property Shapes\HighAvailabilityConfig|null $highAvailabilityConfig
 * @property string $instanceType
 * @property string|null $kmsKeyId
 * @property string $name
 * @property 'ipv4'|'dual'|null $networkType
 * @property string|null $preferredMaintenanceWindow
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $securityGroupIds
 * @property list<Shapes\StorageConfiguration>|null $storageConfigurations
 * @property list<string>|null $subnetIds
 * @property array<string, string>|null $tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     engineType: 'microfocus'|'bluage',
     *     engineVersion?: string|null,
     *     highAvailabilityConfig?: Shapes\HighAvailabilityConfig|null,
     *     instanceType: string,
     *     kmsKeyId?: string|null,
     *     name: string,
     *     networkType?: 'ipv4'|'dual'|null,
     *     preferredMaintenanceWindow?: string|null,
     *     publiclyAccessible?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     storageConfigurations?: list<Shapes\StorageConfiguration>|null,
     *     subnetIds?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
