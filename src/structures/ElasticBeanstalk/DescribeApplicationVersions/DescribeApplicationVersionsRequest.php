<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplicationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property list<string>|null $VersionLabels
 * @property int<1, 1000>|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeApplicationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     VersionLabels?: list<string>|null,
     *     MaxRecords?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
