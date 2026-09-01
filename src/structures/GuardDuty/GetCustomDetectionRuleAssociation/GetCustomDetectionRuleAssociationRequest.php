<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRuleAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $AssociationId
 */
class GetCustomDetectionRuleAssociationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
