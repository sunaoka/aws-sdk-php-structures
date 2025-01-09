<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListFraudsters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $WatchlistId
 */
class ListFraudstersRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     WatchlistId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
