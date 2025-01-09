<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAutomatedDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'NEW'|'NONE' $autoEnableOrganizationMembers
 * @property 'ENABLED'|'DISABLED' $status
 */
class UpdateAutomatedDiscoveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     autoEnableOrganizationMembers?: 'ALL'|'NEW'|'NONE',
     *     status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
