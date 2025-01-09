<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ElasticGpuIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int<10, 1000> $MaxResults
 * @property string $NextToken
 */
class DescribeElasticGpusRequest extends Request
{
    /**
     * @param array{
     *     ElasticGpuIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<10, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
