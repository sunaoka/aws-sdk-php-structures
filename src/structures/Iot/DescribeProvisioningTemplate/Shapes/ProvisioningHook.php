<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $payloadVersion
 * @property string $targetArn
 */
class ProvisioningHook extends Shape
{
    /**
     * @param array{
     *     payloadVersion?: string,
     *     targetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
