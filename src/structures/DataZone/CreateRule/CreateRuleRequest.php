<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property string $clientToken
 * @property string $description
 * @property Shapes\RuleDetail $detail
 * @property string $domainIdentifier
 * @property string $name
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleTarget $target
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     action: 'CREATE_SUBSCRIPTION_REQUEST',
     *     clientToken?: string,
     *     description?: string,
     *     detail: Shapes\RuleDetail,
     *     domainIdentifier: string,
     *     name: string,
     *     scope: Shapes\RuleScope,
     *     target: Shapes\RuleTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
