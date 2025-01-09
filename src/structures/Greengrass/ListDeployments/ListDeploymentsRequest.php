<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
