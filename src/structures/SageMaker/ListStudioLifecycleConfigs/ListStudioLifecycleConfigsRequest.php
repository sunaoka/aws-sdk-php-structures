<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStudioLifecycleConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $NameContains
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab' $AppTypeEquals
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $ModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $ModifiedTimeAfter
 * @property 'CreationTime'|'LastModifiedTime'|'Name' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListStudioLifecycleConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     NameContains?: string,
     *     AppTypeEquals?: 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab',
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     ModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     ModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'CreationTime'|'LastModifiedTime'|'Name',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
