<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $NextToken
 */
class ListStackResourcesRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
