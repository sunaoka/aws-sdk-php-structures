<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutSubscriptionFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterName
 * @property string $filterPattern
 * @property string $destinationArn
 * @property string $roleArn
 * @property 'Random'|'ByLogStream' $distribution
 * @property bool $applyOnTransformedLogs
 */
class PutSubscriptionFilterRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterName: string,
     *     filterPattern: string,
     *     destinationArn: string,
     *     roleArn?: string,
     *     distribution?: 'Random'|'ByLogStream',
     *     applyOnTransformedLogs?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
