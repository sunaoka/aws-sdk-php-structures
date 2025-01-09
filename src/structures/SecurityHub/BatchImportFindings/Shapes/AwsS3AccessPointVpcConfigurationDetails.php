<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 */
class AwsS3AccessPointVpcConfigurationDetails extends Shape
{
    /**
     * @param array{VpcId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
