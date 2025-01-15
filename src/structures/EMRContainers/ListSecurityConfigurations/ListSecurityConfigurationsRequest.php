<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListSecurityConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
