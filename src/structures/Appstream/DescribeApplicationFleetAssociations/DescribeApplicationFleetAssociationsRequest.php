<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeApplicationFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetName
 * @property string $ApplicationArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeApplicationFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     FleetName?: string,
     *     ApplicationArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
