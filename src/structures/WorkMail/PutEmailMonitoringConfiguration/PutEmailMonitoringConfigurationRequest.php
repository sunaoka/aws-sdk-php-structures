<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutEmailMonitoringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $RoleArn
 * @property string $LogGroupArn
 */
class PutEmailMonitoringConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     RoleArn?: string|null,
     *     LogGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
