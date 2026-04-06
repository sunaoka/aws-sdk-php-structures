<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $Alias
 * @property S3AccessPointVpcConfiguration|null $VpcConfiguration
 */
class S3AccessPoint extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     Alias?: string|null,
     *     VpcConfiguration?: S3AccessPointVpcConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
