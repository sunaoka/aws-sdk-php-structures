<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceQuota $ApplicationQuota
 * @property ResourceQuota $ApplicationVersionQuota
 * @property ResourceQuota $EnvironmentQuota
 * @property ResourceQuota $ConfigurationTemplateQuota
 * @property ResourceQuota $CustomPlatformQuota
 */
class ResourceQuotas extends Shape
{
    /**
     * @param array{
     *     ApplicationQuota?: ResourceQuota,
     *     ApplicationVersionQuota?: ResourceQuota,
     *     EnvironmentQuota?: ResourceQuota,
     *     ConfigurationTemplateQuota?: ResourceQuota,
     *     CustomPlatformQuota?: ResourceQuota
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
