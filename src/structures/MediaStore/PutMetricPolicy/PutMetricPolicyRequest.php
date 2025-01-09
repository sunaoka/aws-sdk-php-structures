<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutMetricPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property Shapes\MetricPolicy $MetricPolicy
 */
class PutMetricPolicyRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     MetricPolicy: Shapes\MetricPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
