<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStudioLifecycleConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $NameContains
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'|null $AppTypeEquals
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimeAfter
 * @property 'CreationTime'|'LastModifiedTime'|'Name'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListStudioLifecycleConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     NameContains?: string|null,
     *     AppTypeEquals?: 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'CreationTime'|'LastModifiedTime'|'Name'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
