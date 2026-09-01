<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteCustomDetectionRuleAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $AssociationId
 */
class DeleteCustomDetectionRuleAssociationRequest extends Request
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
