<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateCustomDetectionRuleOrgConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property list<string>|null $IncludeAccountIds
 * @property list<string>|null $ExcludeAccountIds
 * @property string|null $ClientToken
 */
class CreateCustomDetectionRuleOrgConfigurationRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     IncludeAccountIds?: list<string>|null,
     *     ExcludeAccountIds?: list<string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
