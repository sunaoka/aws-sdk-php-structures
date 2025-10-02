<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $accessBudgetResourceArn
 */
class ListPrivacyBudgetsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     accessBudgetResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
