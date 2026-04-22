<?php

namespace Sunaoka\Aws\Structures\IVS\ListRecordingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property DestinationConfiguration $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE' $state
 * @property array<string, string>|null $tags
 */
class RecordingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     destinationConfiguration: DestinationConfiguration,
     *     state: 'CREATING'|'CREATE_FAILED'|'ACTIVE',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
