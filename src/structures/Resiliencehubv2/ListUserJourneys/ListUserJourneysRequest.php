<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListUserJourneys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListUserJourneysRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
