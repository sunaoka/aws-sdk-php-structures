<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachmentId
 * @property string|null $ipv6Address
 * @property string|null $privateIpv4Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string|null,
     *     ipv6Address?: string|null,
     *     privateIpv4Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
