<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
