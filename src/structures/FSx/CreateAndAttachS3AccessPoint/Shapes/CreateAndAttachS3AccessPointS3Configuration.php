<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3AccessPointVpcConfiguration|null $VpcConfiguration
 * @property string|null $Policy
 */
class CreateAndAttachS3AccessPointS3Configuration extends Shape
{
    /**
     * @param array{
     *     VpcConfiguration?: S3AccessPointVpcConfiguration|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
