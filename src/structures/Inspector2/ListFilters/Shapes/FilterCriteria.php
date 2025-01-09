<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $awsAccountId
 * @property list<StringFilter> $codeVulnerabilityDetectorName
 * @property list<StringFilter> $codeVulnerabilityDetectorTags
 * @property list<StringFilter> $codeVulnerabilityFilePath
 * @property list<StringFilter> $componentId
 * @property list<StringFilter> $componentType
 * @property list<StringFilter> $ec2InstanceImageId
 * @property list<StringFilter> $ec2InstanceSubnetId
 * @property list<StringFilter> $ec2InstanceVpcId
 * @property list<StringFilter> $ecrImageArchitecture
 * @property list<StringFilter> $ecrImageHash
 * @property list<DateFilter> $ecrImagePushedAt
 * @property list<StringFilter> $ecrImageRegistry
 * @property list<StringFilter> $ecrImageRepositoryName
 * @property list<StringFilter> $ecrImageTags
 * @property list<NumberFilter> $epssScore
 * @property list<StringFilter> $exploitAvailable
 * @property list<StringFilter> $findingArn
 * @property list<StringFilter> $findingStatus
 * @property list<StringFilter> $findingType
 * @property list<DateFilter> $firstObservedAt
 * @property list<StringFilter> $fixAvailable
 * @property list<NumberFilter> $inspectorScore
 * @property list<StringFilter> $lambdaFunctionExecutionRoleArn
 * @property list<DateFilter> $lambdaFunctionLastModifiedAt
 * @property list<StringFilter> $lambdaFunctionLayers
 * @property list<StringFilter> $lambdaFunctionName
 * @property list<StringFilter> $lambdaFunctionRuntime
 * @property list<DateFilter> $lastObservedAt
 * @property list<StringFilter> $networkProtocol
 * @property list<PortRangeFilter> $portRange
 * @property list<StringFilter> $relatedVulnerabilities
 * @property list<StringFilter> $resourceId
 * @property list<MapFilter> $resourceTags
 * @property list<StringFilter> $resourceType
 * @property list<StringFilter> $severity
 * @property list<StringFilter> $title
 * @property list<DateFilter> $updatedAt
 * @property list<StringFilter> $vendorSeverity
 * @property list<StringFilter> $vulnerabilityId
 * @property list<StringFilter> $vulnerabilitySource
 * @property list<PackageFilter> $vulnerablePackages
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: list<StringFilter>,
     *     codeVulnerabilityDetectorName?: list<StringFilter>,
     *     codeVulnerabilityDetectorTags?: list<StringFilter>,
     *     codeVulnerabilityFilePath?: list<StringFilter>,
     *     componentId?: list<StringFilter>,
     *     componentType?: list<StringFilter>,
     *     ec2InstanceImageId?: list<StringFilter>,
     *     ec2InstanceSubnetId?: list<StringFilter>,
     *     ec2InstanceVpcId?: list<StringFilter>,
     *     ecrImageArchitecture?: list<StringFilter>,
     *     ecrImageHash?: list<StringFilter>,
     *     ecrImagePushedAt?: list<DateFilter>,
     *     ecrImageRegistry?: list<StringFilter>,
     *     ecrImageRepositoryName?: list<StringFilter>,
     *     ecrImageTags?: list<StringFilter>,
     *     epssScore?: list<NumberFilter>,
     *     exploitAvailable?: list<StringFilter>,
     *     findingArn?: list<StringFilter>,
     *     findingStatus?: list<StringFilter>,
     *     findingType?: list<StringFilter>,
     *     firstObservedAt?: list<DateFilter>,
     *     fixAvailable?: list<StringFilter>,
     *     inspectorScore?: list<NumberFilter>,
     *     lambdaFunctionExecutionRoleArn?: list<StringFilter>,
     *     lambdaFunctionLastModifiedAt?: list<DateFilter>,
     *     lambdaFunctionLayers?: list<StringFilter>,
     *     lambdaFunctionName?: list<StringFilter>,
     *     lambdaFunctionRuntime?: list<StringFilter>,
     *     lastObservedAt?: list<DateFilter>,
     *     networkProtocol?: list<StringFilter>,
     *     portRange?: list<PortRangeFilter>,
     *     relatedVulnerabilities?: list<StringFilter>,
     *     resourceId?: list<StringFilter>,
     *     resourceTags?: list<MapFilter>,
     *     resourceType?: list<StringFilter>,
     *     severity?: list<StringFilter>,
     *     title?: list<StringFilter>,
     *     updatedAt?: list<DateFilter>,
     *     vendorSeverity?: list<StringFilter>,
     *     vulnerabilityId?: list<StringFilter>,
     *     vulnerabilitySource?: list<StringFilter>,
     *     vulnerablePackages?: list<PackageFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
