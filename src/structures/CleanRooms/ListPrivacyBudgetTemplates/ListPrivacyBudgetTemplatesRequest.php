<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgetTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListPrivacyBudgetTemplatesRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
