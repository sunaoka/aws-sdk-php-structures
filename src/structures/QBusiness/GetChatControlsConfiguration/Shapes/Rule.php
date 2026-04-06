<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UsersAndGroups|null $includedUsersAndGroups
 * @property UsersAndGroups|null $excludedUsersAndGroups
 * @property 'CONTENT_BLOCKER_RULE'|'CONTENT_RETRIEVAL_RULE' $ruleType
 * @property RuleConfiguration|null $ruleConfiguration
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     includedUsersAndGroups?: UsersAndGroups|null,
     *     excludedUsersAndGroups?: UsersAndGroups|null,
     *     ruleType: 'CONTENT_BLOCKER_RULE'|'CONTENT_RETRIEVAL_RULE',
     *     ruleConfiguration?: RuleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
