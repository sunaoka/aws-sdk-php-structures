<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRulesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleNamePrefix
 * @property list<string>|null $SourceAccountIds
 * @property list<string>|null $SourceOrganizationUnitIds
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTelemetryRulesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     RuleNamePrefix?: string|null,
     *     SourceAccountIds?: list<string>|null,
     *     SourceOrganizationUnitIds?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
