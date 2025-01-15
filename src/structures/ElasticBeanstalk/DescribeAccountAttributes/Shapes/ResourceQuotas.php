<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceQuota|null $ApplicationQuota
 * @property ResourceQuota|null $ApplicationVersionQuota
 * @property ResourceQuota|null $EnvironmentQuota
 * @property ResourceQuota|null $ConfigurationTemplateQuota
 * @property ResourceQuota|null $CustomPlatformQuota
 */
class ResourceQuotas extends Shape
{
    /**
     * @param array{
     *     ApplicationQuota?: ResourceQuota|null,
     *     ApplicationVersionQuota?: ResourceQuota|null,
     *     EnvironmentQuota?: ResourceQuota|null,
     *     ConfigurationTemplateQuota?: ResourceQuota|null,
     *     CustomPlatformQuota?: ResourceQuota|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
