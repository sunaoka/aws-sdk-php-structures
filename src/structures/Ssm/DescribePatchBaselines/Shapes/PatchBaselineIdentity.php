<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaselineId
 * @property string|null $BaselineName
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property string|null $BaselineDescription
 * @property bool|null $DefaultBaseline
 */
class PatchBaselineIdentity extends Shape
{
    /**
     * @param array{
     *     BaselineId?: string|null,
     *     BaselineName?: string|null,
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null,
     *     BaselineDescription?: string|null,
     *     DefaultBaseline?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
