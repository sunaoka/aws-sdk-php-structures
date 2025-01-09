<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'DIFFERENTIAL_PRIVACY' $privacyBudgetType
 * @property int $maxResults
 * @property string $nextToken
 */
class ListCollaborationPrivacyBudgetsRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
