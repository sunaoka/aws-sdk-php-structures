<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaselineId
 * @property string $BaselineName
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property string $BaselineDescription
 * @property bool $DefaultBaseline
 */
class PatchBaselineIdentity extends Shape
{
    /**
     * @param array{
     *     BaselineId?: string,
     *     BaselineName?: string,
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023',
     *     BaselineDescription?: string,
     *     DefaultBaseline?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
