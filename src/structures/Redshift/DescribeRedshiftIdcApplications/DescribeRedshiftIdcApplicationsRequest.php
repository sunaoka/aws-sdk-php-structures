<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RedshiftIdcApplicationArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeRedshiftIdcApplicationsRequest extends Request
{
    /**
     * @param array{
     *     RedshiftIdcApplicationArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
