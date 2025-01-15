<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutSubscriptionFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterName
 * @property string $filterPattern
 * @property string $destinationArn
 * @property string|null $roleArn
 * @property 'Random'|'ByLogStream'|null $distribution
 * @property bool|null $applyOnTransformedLogs
 */
class PutSubscriptionFilterRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterName: string,
     *     filterPattern: string,
     *     destinationArn: string,
     *     roleArn?: string|null,
     *     distribution?: 'Random'|'ByLogStream'|null,
     *     applyOnTransformedLogs?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
