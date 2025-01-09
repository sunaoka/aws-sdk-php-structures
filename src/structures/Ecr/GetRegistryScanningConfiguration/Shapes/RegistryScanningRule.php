<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRegistryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL' $scanFrequency
 * @property list<ScanningRepositoryFilter> $repositoryFilters
 */
class RegistryScanningRule extends Shape
{
    /**
     * @param array{
     *     scanFrequency: 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL',
     *     repositoryFilters: list<ScanningRepositoryFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
