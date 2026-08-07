<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX_X86_64'|'LINUX_ARM64' $operatingSystem
 * @property InstanceRequirements $instanceRequirements
 * @property list<EphemeralBlockDeviceMapping>|null $ephemeralVolumes
 * @property 'BASIC'|'DETAILED'|null $monitoring
 * @property list<LicenseSpecification>|null $licenseSpecifications
 * @property CapacityReservationSpecification|null $capacityReservationSpecification
 * @property string|null $sshKeyName
 * @property string|null $instanceProfileArn
 * @property array<string, string>|null $propagatedTags
 */
class LaunchParameters extends Shape
{
    /**
     * @param array{
     *     operatingSystem: 'LINUX_X86_64'|'LINUX_ARM64',
     *     instanceRequirements: InstanceRequirements,
     *     ephemeralVolumes?: list<EphemeralBlockDeviceMapping>|null,
     *     monitoring?: 'BASIC'|'DETAILED'|null,
     *     licenseSpecifications?: list<LicenseSpecification>|null,
     *     capacityReservationSpecification?: CapacityReservationSpecification|null,
     *     sshKeyName?: string|null,
     *     instanceProfileArn?: string|null,
     *     propagatedTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
