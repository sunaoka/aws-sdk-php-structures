<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addonVersion
 * @property list<string>|null $architecture
 * @property list<string>|null $computeTypes
 * @property list<Compatibility>|null $compatibilities
 * @property bool|null $requiresConfiguration
 * @property bool|null $requiresIamPermissions
 */
class AddonVersionInfo extends Shape
{
    /**
     * @param array{
     *     addonVersion?: string|null,
     *     architecture?: list<string>|null,
     *     computeTypes?: list<string>|null,
     *     compatibilities?: list<Compatibility>|null,
     *     requiresConfiguration?: bool|null,
     *     requiresIamPermissions?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
