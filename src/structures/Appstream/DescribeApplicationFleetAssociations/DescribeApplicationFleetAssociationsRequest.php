<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeApplicationFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetName
 * @property string|null $ApplicationArn
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeApplicationFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     FleetName?: string|null,
     *     ApplicationArn?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
