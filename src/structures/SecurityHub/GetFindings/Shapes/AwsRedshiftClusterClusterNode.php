<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeRole
 * @property string $PrivateIpAddress
 * @property string $PublicIpAddress
 */
class AwsRedshiftClusterClusterNode extends Shape
{
    /**
     * @param array{
     *     NodeRole?: string,
     *     PrivateIpAddress?: string,
     *     PublicIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
