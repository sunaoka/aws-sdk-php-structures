<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property list<string> $EnvironmentIds
 * @property list<string> $EnvironmentNames
 * @property bool $IncludeDeleted
 * @property \Aws\Api\DateTimeResult $IncludedDeletedBackTo
 * @property int<1, 1000> $MaxRecords
 * @property string $NextToken
 */
class DescribeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     VersionLabel?: string,
     *     EnvironmentIds?: list<string>,
     *     EnvironmentNames?: list<string>,
     *     IncludeDeleted?: bool,
     *     IncludedDeletedBackTo?: \Aws\Api\DateTimeResult,
     *     MaxRecords?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
