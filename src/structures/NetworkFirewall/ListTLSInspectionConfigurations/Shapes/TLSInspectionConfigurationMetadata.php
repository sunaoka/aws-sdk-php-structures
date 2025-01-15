<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListTLSInspectionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 */
class TLSInspectionConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
