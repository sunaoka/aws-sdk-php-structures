<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListFraudsters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $WatchlistId
 */
class ListFraudstersRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     WatchlistId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
