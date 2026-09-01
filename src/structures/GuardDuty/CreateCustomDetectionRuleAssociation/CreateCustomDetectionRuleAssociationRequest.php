<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateCustomDetectionRuleAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateCustomDetectionRuleAssociationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
