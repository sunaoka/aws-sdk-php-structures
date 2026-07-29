<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ecrUri
 * @property string $taskExecutionRole
 * @property 'GENERIC_COMPUTE_PROCESSING'|'HARDWARE_ACCELERATED_PROCESSING' $processingType
 * @property 'UNITS_2'|'UNITS_4'|'UNITS_8'|'UNITS_12'|'UNITS_16'|'UNITS_24'|'UNITS_32'|'UNITS_36'|'UNITS_48'|'UNITS_60'|'UNITS_64'|'UNITS_72'|'UNITS_84'|'UNITS_96' $processingUnit
 * @property list<string>|null $command
 * @property int<60, 86400>|null $timeoutSeconds
 * @property array<string, string>|null $environmentVariables
 */
class ContainerTaskConfiguration extends Shape
{
    /**
     * @param array{
     *     ecrUri: string,
     *     taskExecutionRole: string,
     *     processingType: 'GENERIC_COMPUTE_PROCESSING'|'HARDWARE_ACCELERATED_PROCESSING',
     *     processingUnit: 'UNITS_2'|'UNITS_4'|'UNITS_8'|'UNITS_12'|'UNITS_16'|'UNITS_24'|'UNITS_32'|'UNITS_36'|'UNITS_48'|'UNITS_60'|'UNITS_64'|'UNITS_72'|'UNITS_84'|'UNITS_96',
     *     command?: list<string>|null,
     *     timeoutSeconds?: int<60, 86400>|null,
     *     environmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
