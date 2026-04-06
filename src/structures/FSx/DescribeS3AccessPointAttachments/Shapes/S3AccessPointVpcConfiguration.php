<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 */
class S3AccessPointVpcConfiguration extends Shape
{
    /**
     * @param array{VpcId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
