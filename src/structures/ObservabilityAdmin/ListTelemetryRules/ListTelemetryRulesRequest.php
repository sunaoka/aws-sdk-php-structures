<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleNamePrefix
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTelemetryRulesRequest extends Request
{
    /**
     * @param array{
     *     RuleNamePrefix?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
