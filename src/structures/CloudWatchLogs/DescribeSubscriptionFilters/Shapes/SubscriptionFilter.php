<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeSubscriptionFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filterName
 * @property string $logGroupName
 * @property string $filterPattern
 * @property string $destinationArn
 * @property string $roleArn
 * @property 'Random'|'ByLogStream' $distribution
 * @property bool $applyOnTransformedLogs
 * @property int<0, max> $creationTime
 */
class SubscriptionFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: string,
     *     logGroupName?: string,
     *     filterPattern?: string,
     *     destinationArn?: string,
     *     roleArn?: string,
     *     distribution?: 'Random'|'ByLogStream',
     *     applyOnTransformedLogs?: bool,
     *     creationTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
