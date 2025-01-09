<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property string $State
 */
class AwsEc2VpnConnectionRoutesDetails extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
