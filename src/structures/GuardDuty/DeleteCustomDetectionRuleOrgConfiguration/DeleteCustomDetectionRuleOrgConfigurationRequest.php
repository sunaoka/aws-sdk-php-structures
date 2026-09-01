<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteCustomDetectionRuleOrgConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 */
class DeleteCustomDetectionRuleOrgConfigurationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
