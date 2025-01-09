<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteEmailMonitoringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DeleteEmailMonitoringConfigurationRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
