<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RedshiftIdcApplicationArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeRedshiftIdcApplicationsRequest extends Request
{
    /**
     * @param array{
     *     RedshiftIdcApplicationArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
