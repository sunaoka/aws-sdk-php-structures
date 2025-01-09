<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CoverageStringFilter> $accountId
 * @property list<CoverageMapFilter> $ec2InstanceTags
 * @property list<CoverageStringFilter> $ecrImageTags
 * @property list<CoverageStringFilter> $ecrRepositoryName
 * @property list<CoverageDateFilter> $imagePulledAt
 * @property list<CoverageStringFilter> $lambdaFunctionName
 * @property list<CoverageStringFilter> $lambdaFunctionRuntime
 * @property list<CoverageMapFilter> $lambdaFunctionTags
 * @property list<CoverageDateFilter> $lastScannedAt
 * @property list<CoverageStringFilter> $resourceId
 * @property list<CoverageStringFilter> $resourceType
 * @property list<CoverageStringFilter> $scanMode
 * @property list<CoverageStringFilter> $scanStatusCode
 * @property list<CoverageStringFilter> $scanStatusReason
 * @property list<CoverageStringFilter> $scanType
 */
class CoverageFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<CoverageStringFilter>,
     *     ec2InstanceTags?: list<CoverageMapFilter>,
     *     ecrImageTags?: list<CoverageStringFilter>,
     *     ecrRepositoryName?: list<CoverageStringFilter>,
     *     imagePulledAt?: list<CoverageDateFilter>,
     *     lambdaFunctionName?: list<CoverageStringFilter>,
     *     lambdaFunctionRuntime?: list<CoverageStringFilter>,
     *     lambdaFunctionTags?: list<CoverageMapFilter>,
     *     lastScannedAt?: list<CoverageDateFilter>,
     *     resourceId?: list<CoverageStringFilter>,
     *     resourceType?: list<CoverageStringFilter>,
     *     scanMode?: list<CoverageStringFilter>,
     *     scanStatusCode?: list<CoverageStringFilter>,
     *     scanStatusReason?: list<CoverageStringFilter>,
     *     scanType?: list<CoverageStringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
