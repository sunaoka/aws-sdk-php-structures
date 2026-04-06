<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeSubscriptionFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filterName
 * @property string|null $logGroupName
 * @property string|null $filterPattern
 * @property string|null $destinationArn
 * @property string|null $roleArn
 * @property 'Random'|'ByLogStream'|null $distribution
 * @property bool|null $applyOnTransformedLogs
 * @property int<0, max>|null $creationTime
 * @property string|null $fieldSelectionCriteria
 * @property list<string>|null $emitSystemFields
 */
class SubscriptionFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: string|null,
     *     logGroupName?: string|null,
     *     filterPattern?: string|null,
     *     destinationArn?: string|null,
     *     roleArn?: string|null,
     *     distribution?: 'Random'|'ByLogStream'|null,
     *     applyOnTransformedLogs?: bool|null,
     *     creationTime?: int<0, max>|null,
     *     fieldSelectionCriteria?: string|null,
     *     emitSystemFields?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
