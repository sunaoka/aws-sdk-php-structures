<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CollectorDetails|null $collectorDetails
 * @property EnvironmentSourceConfiguration|null $sourceConfiguration
 * @property EnvironmentConfiguration|null $environmentConfiguration
 * @property CodeScanSummary|null $latestScan
 */
class CodeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     collectorDetails?: CollectorDetails|null,
     *     sourceConfiguration?: EnvironmentSourceConfiguration|null,
     *     environmentConfiguration?: EnvironmentConfiguration|null,
     *     latestScan?: CodeScanSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
