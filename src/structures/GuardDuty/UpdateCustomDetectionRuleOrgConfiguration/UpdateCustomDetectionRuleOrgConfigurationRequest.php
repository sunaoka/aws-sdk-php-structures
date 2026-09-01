<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateCustomDetectionRuleOrgConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property list<string>|null $IncludeAccountIds
 * @property list<string>|null $ExcludeAccountIds
 */
class UpdateCustomDetectionRuleOrgConfigurationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     IncludeAccountIds?: list<string>|null,
     *     ExcludeAccountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
