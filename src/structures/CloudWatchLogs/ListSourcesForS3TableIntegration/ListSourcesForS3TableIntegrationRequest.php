<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSourcesForS3TableIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSourcesForS3TableIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
