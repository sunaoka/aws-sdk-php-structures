<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProjectPeriodicScanConfiguration>|null $periodicScanConfigurations
 * @property list<ProjectContinuousIntegrationScanConfiguration>|null $continuousIntegrationScanConfigurations
 */
class ProjectCodeSecurityScanConfiguration extends Shape
{
    /**
     * @param array{
     *     periodicScanConfigurations?: list<ProjectPeriodicScanConfiguration>|null,
     *     continuousIntegrationScanConfigurations?: list<ProjectContinuousIntegrationScanConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
