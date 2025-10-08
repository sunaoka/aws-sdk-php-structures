<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectName
 * @property string|null $integrationArn
 * @property string $providerType
 * @property string $providerTypeVisibility
 * @property string|null $lastScannedCommitId
 * @property ProjectCodeSecurityScanConfiguration|null $scanConfiguration
 * @property CodeRepositoryOnDemandScan|null $onDemandScan
 */
class CodeRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     projectName: string,
     *     integrationArn?: string|null,
     *     providerType: string,
     *     providerTypeVisibility: string,
     *     lastScannedCommitId?: string|null,
     *     scanConfiguration?: ProjectCodeSecurityScanConfiguration|null,
     *     onDemandScan?: CodeRepositoryOnDemandScan|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
