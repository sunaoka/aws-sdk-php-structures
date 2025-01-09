<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property string $ipv6Address
 * @property string $privateIpv4Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string,
     *     ipv6Address?: string,
     *     privateIpv4Address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
