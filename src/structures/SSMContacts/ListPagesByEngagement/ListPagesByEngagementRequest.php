<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngagementId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPagesByEngagementRequest extends Request
{
    /**
     * @param array{
     *     EngagementId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
