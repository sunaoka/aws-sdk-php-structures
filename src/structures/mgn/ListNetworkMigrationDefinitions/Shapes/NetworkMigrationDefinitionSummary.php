<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $name
 * @property 'NSX'|'VSPHERE'|'FORTIGATE_FIREWALL'|'PALO_ALTO_FIREWALL'|'CISCO_ACI'|'LOGICAL_MODEL'|'MODELIZE_IT'|null $sourceEnvironment
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $scopeTags
 */
class NetworkMigrationDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     networkMigrationDefinitionID?: string|null,
     *     name?: string|null,
     *     sourceEnvironment?: 'NSX'|'VSPHERE'|'FORTIGATE_FIREWALL'|'PALO_ALTO_FIREWALL'|'CISCO_ACI'|'LOGICAL_MODEL'|'MODELIZE_IT'|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
