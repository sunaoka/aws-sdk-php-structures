<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property Shapes\RuleTarget $target
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleDetail $detail
 * @property string|null $description
 * @property string|null $clientToken
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     target: Shapes\RuleTarget,
     *     action: 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST',
     *     scope: Shapes\RuleScope,
     *     detail: Shapes\RuleDetail,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
