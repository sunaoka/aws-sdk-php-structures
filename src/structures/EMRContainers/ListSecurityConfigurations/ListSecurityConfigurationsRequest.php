<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSecurityConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
