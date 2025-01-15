<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
