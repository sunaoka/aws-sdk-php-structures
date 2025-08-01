<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $findingArn
 * @property list<StringFilter>|null $awsAccountId
 * @property list<StringFilter>|null $findingType
 * @property list<StringFilter>|null $severity
 * @property list<DateFilter>|null $firstObservedAt
 * @property list<DateFilter>|null $lastObservedAt
 * @property list<DateFilter>|null $updatedAt
 * @property list<StringFilter>|null $findingStatus
 * @property list<StringFilter>|null $title
 * @property list<NumberFilter>|null $inspectorScore
 * @property list<StringFilter>|null $resourceType
 * @property list<StringFilter>|null $resourceId
 * @property list<MapFilter>|null $resourceTags
 * @property list<StringFilter>|null $ec2InstanceImageId
 * @property list<StringFilter>|null $ec2InstanceVpcId
 * @property list<StringFilter>|null $ec2InstanceSubnetId
 * @property list<DateFilter>|null $ecrImagePushedAt
 * @property list<StringFilter>|null $ecrImageArchitecture
 * @property list<StringFilter>|null $ecrImageRegistry
 * @property list<StringFilter>|null $ecrImageRepositoryName
 * @property list<StringFilter>|null $ecrImageTags
 * @property list<StringFilter>|null $ecrImageHash
 * @property list<DateFilter>|null $ecrImageLastInUseAt
 * @property list<NumberFilter>|null $ecrImageInUseCount
 * @property list<PortRangeFilter>|null $portRange
 * @property list<StringFilter>|null $networkProtocol
 * @property list<StringFilter>|null $componentId
 * @property list<StringFilter>|null $componentType
 * @property list<StringFilter>|null $vulnerabilityId
 * @property list<StringFilter>|null $vulnerabilitySource
 * @property list<StringFilter>|null $vendorSeverity
 * @property list<PackageFilter>|null $vulnerablePackages
 * @property list<StringFilter>|null $relatedVulnerabilities
 * @property list<StringFilter>|null $fixAvailable
 * @property list<StringFilter>|null $lambdaFunctionName
 * @property list<StringFilter>|null $lambdaFunctionLayers
 * @property list<StringFilter>|null $lambdaFunctionRuntime
 * @property list<DateFilter>|null $lambdaFunctionLastModifiedAt
 * @property list<StringFilter>|null $lambdaFunctionExecutionRoleArn
 * @property list<StringFilter>|null $exploitAvailable
 * @property list<StringFilter>|null $codeVulnerabilityDetectorName
 * @property list<StringFilter>|null $codeVulnerabilityDetectorTags
 * @property list<StringFilter>|null $codeVulnerabilityFilePath
 * @property list<NumberFilter>|null $epssScore
 * @property list<StringFilter>|null $codeRepositoryProjectName
 * @property list<StringFilter>|null $codeRepositoryProviderType
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{
     *     findingArn?: list<StringFilter>|null,
     *     awsAccountId?: list<StringFilter>|null,
     *     findingType?: list<StringFilter>|null,
     *     severity?: list<StringFilter>|null,
     *     firstObservedAt?: list<DateFilter>|null,
     *     lastObservedAt?: list<DateFilter>|null,
     *     updatedAt?: list<DateFilter>|null,
     *     findingStatus?: list<StringFilter>|null,
     *     title?: list<StringFilter>|null,
     *     inspectorScore?: list<NumberFilter>|null,
     *     resourceType?: list<StringFilter>|null,
     *     resourceId?: list<StringFilter>|null,
     *     resourceTags?: list<MapFilter>|null,
     *     ec2InstanceImageId?: list<StringFilter>|null,
     *     ec2InstanceVpcId?: list<StringFilter>|null,
     *     ec2InstanceSubnetId?: list<StringFilter>|null,
     *     ecrImagePushedAt?: list<DateFilter>|null,
     *     ecrImageArchitecture?: list<StringFilter>|null,
     *     ecrImageRegistry?: list<StringFilter>|null,
     *     ecrImageRepositoryName?: list<StringFilter>|null,
     *     ecrImageTags?: list<StringFilter>|null,
     *     ecrImageHash?: list<StringFilter>|null,
     *     ecrImageLastInUseAt?: list<DateFilter>|null,
     *     ecrImageInUseCount?: list<NumberFilter>|null,
     *     portRange?: list<PortRangeFilter>|null,
     *     networkProtocol?: list<StringFilter>|null,
     *     componentId?: list<StringFilter>|null,
     *     componentType?: list<StringFilter>|null,
     *     vulnerabilityId?: list<StringFilter>|null,
     *     vulnerabilitySource?: list<StringFilter>|null,
     *     vendorSeverity?: list<StringFilter>|null,
     *     vulnerablePackages?: list<PackageFilter>|null,
     *     relatedVulnerabilities?: list<StringFilter>|null,
     *     fixAvailable?: list<StringFilter>|null,
     *     lambdaFunctionName?: list<StringFilter>|null,
     *     lambdaFunctionLayers?: list<StringFilter>|null,
     *     lambdaFunctionRuntime?: list<StringFilter>|null,
     *     lambdaFunctionLastModifiedAt?: list<DateFilter>|null,
     *     lambdaFunctionExecutionRoleArn?: list<StringFilter>|null,
     *     exploitAvailable?: list<StringFilter>|null,
     *     codeVulnerabilityDetectorName?: list<StringFilter>|null,
     *     codeVulnerabilityDetectorTags?: list<StringFilter>|null,
     *     codeVulnerabilityFilePath?: list<StringFilter>|null,
     *     epssScore?: list<NumberFilter>|null,
     *     codeRepositoryProjectName?: list<StringFilter>|null,
     *     codeRepositoryProviderType?: list<StringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
