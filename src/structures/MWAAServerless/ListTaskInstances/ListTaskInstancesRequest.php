<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListTaskInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string $RunId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTaskInstancesRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     RunId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
