<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accessBudgetResourceArn
 */
class ListCollaborationPrivacyBudgetsRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     accessBudgetResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
