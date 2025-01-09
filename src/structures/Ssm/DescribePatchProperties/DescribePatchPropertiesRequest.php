<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property 'PRODUCT'|'PRODUCT_FAMILY'|'CLASSIFICATION'|'MSRC_SEVERITY'|'PRIORITY'|'SEVERITY' $Property
 * @property 'OS'|'APPLICATION' $PatchSet
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class DescribePatchPropertiesRequest extends Request
{
    /**
     * @param array{
     *     OperatingSystem: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023',
     *     Property: 'PRODUCT'|'PRODUCT_FAMILY'|'CLASSIFICATION'|'MSRC_SEVERITY'|'PRIORITY'|'SEVERITY',
     *     PatchSet?: 'OS'|'APPLICATION',
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
