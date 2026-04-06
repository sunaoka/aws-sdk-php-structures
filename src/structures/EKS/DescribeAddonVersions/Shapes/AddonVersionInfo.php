<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addonVersion
 * @property list<string>|null $architecture
 * @property list<Compatibility>|null $compatibilities
 * @property bool|null $requiresConfiguration
 */
class AddonVersionInfo extends Shape
{
    /**
     * @param array{
     *     addonVersion?: string|null,
     *     architecture?: list<string>|null,
     *     compatibilities?: list<Compatibility>|null,
     *     requiresConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
