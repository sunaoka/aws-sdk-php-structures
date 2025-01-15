<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ElasticGpuIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int<10, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeElasticGpusRequest extends Request
{
    /**
     * @param array{
     *     ElasticGpuIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<10, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
