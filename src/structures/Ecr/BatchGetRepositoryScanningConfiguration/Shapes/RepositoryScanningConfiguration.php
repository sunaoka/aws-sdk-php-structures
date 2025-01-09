<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryArn
 * @property string $repositoryName
 * @property bool $scanOnPush
 * @property 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL' $scanFrequency
 * @property list<ScanningRepositoryFilter> $appliedScanFilters
 */
class RepositoryScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string,
     *     repositoryName?: string,
     *     scanOnPush?: bool,
     *     scanFrequency?: 'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|'MANUAL',
     *     appliedScanFilters?: list<ScanningRepositoryFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
