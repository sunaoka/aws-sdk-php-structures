<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int<1, 10> $revision
 * @property string|null $publicId
 * @property string|null $name
 * @property string|null $specVersion
 * @property list<MatterCapabilityReportAttribute>|null $attributes
 * @property list<string>|null $commands
 * @property list<string>|null $events
 * @property int<0, 4294967295>|null $featureMap
 * @property list<string>|null $generatedCommands
 * @property int<0, 4096>|null $fabricIndex
 */
class MatterCapabilityReportCluster extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     revision: int<1, 10>,
     *     publicId?: string|null,
     *     name?: string|null,
     *     specVersion?: string|null,
     *     attributes?: list<MatterCapabilityReportAttribute>|null,
     *     commands?: list<string>|null,
     *     events?: list<string>|null,
     *     featureMap?: int<0, 4294967295>|null,
     *     generatedCommands?: list<string>|null,
     *     fabricIndex?: int<0, 4096>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
