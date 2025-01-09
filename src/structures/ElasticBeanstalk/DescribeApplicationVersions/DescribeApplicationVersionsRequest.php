<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplicationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property list<string> $VersionLabels
 * @property int<1, 1000> $MaxRecords
 * @property string $NextToken
 */
class DescribeApplicationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     VersionLabels?: list<string>,
     *     MaxRecords?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
