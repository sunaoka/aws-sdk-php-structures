<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $InstanceId
 * @property string $Name
 * @property string $Function
 * @property list<Shapes\RuleAction> $Actions
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     InstanceId: string,
     *     Name: string,
     *     Function: string,
     *     Actions: list<Shapes\RuleAction>,
     *     PublishStatus: 'DRAFT'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
