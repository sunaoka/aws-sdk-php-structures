<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property string $NextToken
 * @property int<1, 100> $MaxItems
 */
class DescribeEnvironmentManagedActionHistoryRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string,
     *     EnvironmentName?: string,
     *     NextToken?: string,
     *     MaxItems?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
