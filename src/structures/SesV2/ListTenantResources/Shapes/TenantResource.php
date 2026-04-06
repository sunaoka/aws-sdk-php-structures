<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenantResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'EMAIL_TEMPLATE'|null $ResourceType
 * @property string|null $ResourceArn
 */
class TenantResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'EMAIL_TEMPLATE'|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
