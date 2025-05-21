<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskConfigurationId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class OtaTaskConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     TaskConfigurationId?: string|null,
     *     Name?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
