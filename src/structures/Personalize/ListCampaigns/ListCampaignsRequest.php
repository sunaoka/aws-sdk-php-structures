<?php

namespace Sunaoka\Aws\Structures\Personalize\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     solutionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
