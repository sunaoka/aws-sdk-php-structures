<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property MatterCapabilityReportAttributeValue|null $value
 */
class MatterCapabilityReportAttribute extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     value?: MatterCapabilityReportAttributeValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
