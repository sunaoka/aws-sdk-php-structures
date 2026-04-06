<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NSX'|'VSPHERE'|'FORTIGATE_FIREWALL'|'PALO_ALTO_FIREWALL'|'CISCO_ACI'|'LOGICAL_MODEL'|'MODELIZE_IT' $sourceEnvironment
 * @property SourceS3Configuration $sourceS3Configuration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceEnvironment: 'NSX'|'VSPHERE'|'FORTIGATE_FIREWALL'|'PALO_ALTO_FIREWALL'|'CISCO_ACI'|'LOGICAL_MODEL'|'MODELIZE_IT',
     *     sourceS3Configuration: SourceS3Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
