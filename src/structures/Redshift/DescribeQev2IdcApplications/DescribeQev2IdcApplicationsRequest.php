<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeQev2IdcApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Qev2IdcApplicationArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeQev2IdcApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Qev2IdcApplicationArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
