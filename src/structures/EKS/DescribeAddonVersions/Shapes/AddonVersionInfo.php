<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addonVersion
 * @property list<string> $architecture
 * @property list<string> $computeTypes
 * @property list<Compatibility> $compatibilities
 * @property bool $requiresConfiguration
 * @property bool $requiresIamPermissions
 */
class AddonVersionInfo extends Shape
{
    /**
     * @param array{
     *     addonVersion?: string,
     *     architecture?: list<string>,
     *     computeTypes?: list<string>,
     *     compatibilities?: list<Compatibility>,
     *     requiresConfiguration?: bool,
     *     requiresIamPermissions?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
