<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CoverageStringFilter>|null $scanStatusCode
 * @property list<CoverageStringFilter>|null $scanStatusReason
 * @property list<CoverageStringFilter>|null $accountId
 * @property list<CoverageStringFilter>|null $resourceId
 * @property list<CoverageStringFilter>|null $resourceType
 * @property list<CoverageStringFilter>|null $scanType
 * @property list<CoverageStringFilter>|null $ecrRepositoryName
 * @property list<CoverageStringFilter>|null $ecrImageTags
 * @property list<CoverageMapFilter>|null $ec2InstanceTags
 * @property list<CoverageStringFilter>|null $lambdaFunctionName
 * @property list<CoverageMapFilter>|null $lambdaFunctionTags
 * @property list<CoverageStringFilter>|null $lambdaFunctionRuntime
 * @property list<CoverageDateFilter>|null $lastScannedAt
 * @property list<CoverageStringFilter>|null $scanMode
 * @property list<CoverageDateFilter>|null $imagePulledAt
 * @property list<CoverageDateFilter>|null $ecrImageLastInUseAt
 * @property list<CoverageNumberFilter>|null $ecrImageInUseCount
 * @property list<CoverageStringFilter>|null $codeRepositoryProjectName
 * @property list<CoverageStringFilter>|null $codeRepositoryProviderType
 * @property list<CoverageStringFilter>|null $codeRepositoryProviderTypeVisibility
 * @property list<CoverageStringFilter>|null $lastScannedCommitId
 */
class CoverageFilterCriteria extends Shape
{
    /**
     * @param array{
     *     scanStatusCode?: list<CoverageStringFilter>|null,
     *     scanStatusReason?: list<CoverageStringFilter>|null,
     *     accountId?: list<CoverageStringFilter>|null,
     *     resourceId?: list<CoverageStringFilter>|null,
     *     resourceType?: list<CoverageStringFilter>|null,
     *     scanType?: list<CoverageStringFilter>|null,
     *     ecrRepositoryName?: list<CoverageStringFilter>|null,
     *     ecrImageTags?: list<CoverageStringFilter>|null,
     *     ec2InstanceTags?: list<CoverageMapFilter>|null,
     *     lambdaFunctionName?: list<CoverageStringFilter>|null,
     *     lambdaFunctionTags?: list<CoverageMapFilter>|null,
     *     lambdaFunctionRuntime?: list<CoverageStringFilter>|null,
     *     lastScannedAt?: list<CoverageDateFilter>|null,
     *     scanMode?: list<CoverageStringFilter>|null,
     *     imagePulledAt?: list<CoverageDateFilter>|null,
     *     ecrImageLastInUseAt?: list<CoverageDateFilter>|null,
     *     ecrImageInUseCount?: list<CoverageNumberFilter>|null,
     *     codeRepositoryProjectName?: list<CoverageStringFilter>|null,
     *     codeRepositoryProviderType?: list<CoverageStringFilter>|null,
     *     codeRepositoryProviderTypeVisibility?: list<CoverageStringFilter>|null,
     *     lastScannedCommitId?: list<CoverageStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
