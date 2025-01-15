<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeRole
 * @property string|null $PrivateIpAddress
 * @property string|null $PublicIpAddress
 */
class AwsRedshiftClusterClusterNode extends Shape
{
    /**
     * @param array{
     *     NodeRole?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PublicIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
