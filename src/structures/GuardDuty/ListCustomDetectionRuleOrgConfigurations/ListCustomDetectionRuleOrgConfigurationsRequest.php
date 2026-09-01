<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleOrgConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ACTIVE'|'PROCESSING'|'FAILED'|null $Status
 */
class ListCustomDetectionRuleOrgConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Status?: 'ACTIVE'|'PROCESSING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
