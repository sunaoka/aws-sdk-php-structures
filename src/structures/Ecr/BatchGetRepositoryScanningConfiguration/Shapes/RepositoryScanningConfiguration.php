<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryArn
 * @property string|null $repositoryName
 * @property bool|null $scanOnPush
 * @property 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL'|null $scanFrequency
 * @property list<ScanningRepositoryFilter>|null $appliedScanFilters
 */
class RepositoryScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string|null,
     *     repositoryName?: string|null,
     *     scanOnPush?: bool|null,
     *     scanFrequency?: 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL'|null,
     *     appliedScanFilters?: list<ScanningRepositoryFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
