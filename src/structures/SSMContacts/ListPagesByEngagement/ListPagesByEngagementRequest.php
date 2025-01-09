<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngagementId
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 */
class ListPagesByEngagementRequest extends Request
{
    /**
     * @param array{
     *     EngagementId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
