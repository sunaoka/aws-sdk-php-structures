<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxItems
 */
class DescribeEnvironmentManagedActionHistoryRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     NextToken?: string|null,
     *     MaxItems?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
