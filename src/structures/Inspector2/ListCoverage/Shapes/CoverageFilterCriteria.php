<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CoverageStringFilter>|null $accountId
 * @property list<CoverageMapFilter>|null $ec2InstanceTags
 * @property list<CoverageStringFilter>|null $ecrImageTags
 * @property list<CoverageStringFilter>|null $ecrRepositoryName
 * @property list<CoverageDateFilter>|null $imagePulledAt
 * @property list<CoverageStringFilter>|null $lambdaFunctionName
 * @property list<CoverageStringFilter>|null $lambdaFunctionRuntime
 * @property list<CoverageMapFilter>|null $lambdaFunctionTags
 * @property list<CoverageDateFilter>|null $lastScannedAt
 * @property list<CoverageStringFilter>|null $resourceId
 * @property list<CoverageStringFilter>|null $resourceType
 * @property list<CoverageStringFilter>|null $scanMode
 * @property list<CoverageStringFilter>|null $scanStatusCode
 * @property list<CoverageStringFilter>|null $scanStatusReason
 * @property list<CoverageStringFilter>|null $scanType
 */
class CoverageFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<CoverageStringFilter>|null,
     *     ec2InstanceTags?: list<CoverageMapFilter>|null,
     *     ecrImageTags?: list<CoverageStringFilter>|null,
     *     ecrRepositoryName?: list<CoverageStringFilter>|null,
     *     imagePulledAt?: list<CoverageDateFilter>|null,
     *     lambdaFunctionName?: list<CoverageStringFilter>|null,
     *     lambdaFunctionRuntime?: list<CoverageStringFilter>|null,
     *     lambdaFunctionTags?: list<CoverageMapFilter>|null,
     *     lastScannedAt?: list<CoverageDateFilter>|null,
     *     resourceId?: list<CoverageStringFilter>|null,
     *     resourceType?: list<CoverageStringFilter>|null,
     *     scanMode?: list<CoverageStringFilter>|null,
     *     scanStatusCode?: list<CoverageStringFilter>|null,
     *     scanStatusReason?: list<CoverageStringFilter>|null,
     *     scanType?: list<CoverageStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
