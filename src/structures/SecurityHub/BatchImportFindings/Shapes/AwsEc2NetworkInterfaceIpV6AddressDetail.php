<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpV6Address
 */
class AwsEc2NetworkInterfaceIpV6AddressDetail extends Shape
{
    /**
     * @param array{IpV6Address?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
