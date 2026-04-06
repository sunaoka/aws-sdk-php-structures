<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PeriodicScanConfiguration|null $periodicScanConfiguration
 * @property ContinuousIntegrationScanConfiguration|null $continuousIntegrationScanConfiguration
 * @property list<'SAST'|'IAC'|'SCA'> $ruleSetCategories
 */
class CodeSecurityScanConfiguration extends Shape
{
    /**
     * @param array{
     *     periodicScanConfiguration?: PeriodicScanConfiguration|null,
     *     continuousIntegrationScanConfiguration?: ContinuousIntegrationScanConfiguration|null,
     *     ruleSetCategories: list<'SAST'|'IAC'|'SCA'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
