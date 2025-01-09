<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'DIFFERENTIAL_PRIVACY' $privacyBudgetType
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListPrivacyBudgetsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
