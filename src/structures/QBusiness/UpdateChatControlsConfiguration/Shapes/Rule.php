<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UsersAndGroups $includedUsersAndGroups
 * @property UsersAndGroups $excludedUsersAndGroups
 * @property 'CONTENT_BLOCKER_RULE'|'CONTENT_RETRIEVAL_RULE' $ruleType
 * @property RuleConfiguration $ruleConfiguration
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     includedUsersAndGroups?: UsersAndGroups,
     *     excludedUsersAndGroups?: UsersAndGroups,
     *     ruleType: 'CONTENT_BLOCKER_RULE'|'CONTENT_RETRIEVAL_RULE',
     *     ruleConfiguration?: RuleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
