<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property string|null $VersionLabel
 * @property list<string>|null $EnvironmentIds
 * @property list<string>|null $EnvironmentNames
 * @property bool|null $IncludeDeleted
 * @property \Aws\Api\DateTimeResult|null $IncludedDeletedBackTo
 * @property int<1, 1000>|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     VersionLabel?: string|null,
     *     EnvironmentIds?: list<string>|null,
     *     EnvironmentNames?: list<string>|null,
     *     IncludeDeleted?: bool|null,
     *     IncludedDeletedBackTo?: \Aws\Api\DateTimeResult|null,
     *     MaxRecords?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
