<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateCustomDetectionRuleAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $AssociationId
 * @property 'LIVE'|'DRY_RUN' $Mode
 */
class UpdateCustomDetectionRuleAssociationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     AssociationId: string,
     *     Mode: 'LIVE'|'DRY_RUN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
