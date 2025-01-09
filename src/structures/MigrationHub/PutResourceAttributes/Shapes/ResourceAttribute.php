<?php

namespace Sunaoka\Aws\Structures\MigrationHub\PutResourceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4_ADDRESS'|'IPV6_ADDRESS'|'MAC_ADDRESS'|'FQDN'|'VM_MANAGER_ID'|'VM_MANAGED_OBJECT_REFERENCE'|'VM_NAME'|'VM_PATH'|'BIOS_ID'|'MOTHERBOARD_SERIAL_NUMBER' $Type
 * @property string $Value
 */
class ResourceAttribute extends Shape
{
    /**
     * @param array{
     *     Type: 'IPV4_ADDRESS'|'IPV6_ADDRESS'|'MAC_ADDRESS'|'FQDN'|'VM_MANAGER_ID'|'VM_MANAGED_OBJECT_REFERENCE'|'VM_NAME'|'VM_PATH'|'BIOS_ID'|'MOTHERBOARD_SERIAL_NUMBER',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
