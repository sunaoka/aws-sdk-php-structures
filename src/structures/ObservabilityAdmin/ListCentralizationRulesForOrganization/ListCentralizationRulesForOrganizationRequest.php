<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListCentralizationRulesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleNamePrefix
 * @property bool|null $AllRegions
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCentralizationRulesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     RuleNamePrefix?: string|null,
     *     AllRegions?: bool|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
