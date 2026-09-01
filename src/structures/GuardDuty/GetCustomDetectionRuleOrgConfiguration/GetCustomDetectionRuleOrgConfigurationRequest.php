<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRuleOrgConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 */
class GetCustomDetectionRuleOrgConfigurationRequest extends Request
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
