<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngagementId
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListPagesByEngagementRequest extends Request
{
    /**
     * @param array{
     *     EngagementId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
