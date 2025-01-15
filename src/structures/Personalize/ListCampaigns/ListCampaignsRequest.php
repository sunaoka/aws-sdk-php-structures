<?php

namespace Sunaoka\Aws\Structures\Personalize\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $solutionArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     solutionArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
