<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationEnrollmentConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Account'|'OrganizationalUnit'|null $targetType
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListOrganizationEnrollmentConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     targetType?: 'Account'|'OrganizationalUnit'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
