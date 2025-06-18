<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $awsAccountId
 * @property list<StringFilter>|null $codeRepositoryProjectName
 * @property list<StringFilter>|null $codeRepositoryProviderType
 * @property list<StringFilter>|null $codeVulnerabilityDetectorName
 * @property list<StringFilter>|null $codeVulnerabilityDetectorTags
 * @property list<StringFilter>|null $codeVulnerabilityFilePath
 * @property list<StringFilter>|null $componentId
 * @property list<StringFilter>|null $componentType
 * @property list<StringFilter>|null $ec2InstanceImageId
 * @property list<StringFilter>|null $ec2InstanceSubnetId
 * @property list<StringFilter>|null $ec2InstanceVpcId
 * @property list<StringFilter>|null $ecrImageArchitecture
 * @property list<StringFilter>|null $ecrImageHash
 * @property list<NumberFilter>|null $ecrImageInUseCount
 * @property list<DateFilter>|null $ecrImageLastInUseAt
 * @property list<DateFilter>|null $ecrImagePushedAt
 * @property list<StringFilter>|null $ecrImageRegistry
 * @property list<StringFilter>|null $ecrImageRepositoryName
 * @property list<StringFilter>|null $ecrImageTags
 * @property list<NumberFilter>|null $epssScore
 * @property list<StringFilter>|null $exploitAvailable
 * @property list<StringFilter>|null $findingArn
 * @property list<StringFilter>|null $findingStatus
 * @property list<StringFilter>|null $findingType
 * @property list<DateFilter>|null $firstObservedAt
 * @property list<StringFilter>|null $fixAvailable
 * @property list<NumberFilter>|null $inspectorScore
 * @property list<StringFilter>|null $lambdaFunctionExecutionRoleArn
 * @property list<DateFilter>|null $lambdaFunctionLastModifiedAt
 * @property list<StringFilter>|null $lambdaFunctionLayers
 * @property list<StringFilter>|null $lambdaFunctionName
 * @property list<StringFilter>|null $lambdaFunctionRuntime
 * @property list<DateFilter>|null $lastObservedAt
 * @property list<StringFilter>|null $networkProtocol
 * @property list<PortRangeFilter>|null $portRange
 * @property list<StringFilter>|null $relatedVulnerabilities
 * @property list<StringFilter>|null $resourceId
 * @property list<MapFilter>|null $resourceTags
 * @property list<StringFilter>|null $resourceType
 * @property list<StringFilter>|null $severity
 * @property list<StringFilter>|null $title
 * @property list<DateFilter>|null $updatedAt
 * @property list<StringFilter>|null $vendorSeverity
 * @property list<StringFilter>|null $vulnerabilityId
 * @property list<StringFilter>|null $vulnerabilitySource
 * @property list<PackageFilter>|null $vulnerablePackages
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: list<StringFilter>|null,
     *     codeRepositoryProjectName?: list<StringFilter>|null,
     *     codeRepositoryProviderType?: list<StringFilter>|null,
     *     codeVulnerabilityDetectorName?: list<StringFilter>|null,
     *     codeVulnerabilityDetectorTags?: list<StringFilter>|null,
     *     codeVulnerabilityFilePath?: list<StringFilter>|null,
     *     componentId?: list<StringFilter>|null,
     *     componentType?: list<StringFilter>|null,
     *     ec2InstanceImageId?: list<StringFilter>|null,
     *     ec2InstanceSubnetId?: list<StringFilter>|null,
     *     ec2InstanceVpcId?: list<StringFilter>|null,
     *     ecrImageArchitecture?: list<StringFilter>|null,
     *     ecrImageHash?: list<StringFilter>|null,
     *     ecrImageInUseCount?: list<NumberFilter>|null,
     *     ecrImageLastInUseAt?: list<DateFilter>|null,
     *     ecrImagePushedAt?: list<DateFilter>|null,
     *     ecrImageRegistry?: list<StringFilter>|null,
     *     ecrImageRepositoryName?: list<StringFilter>|null,
     *     ecrImageTags?: list<StringFilter>|null,
     *     epssScore?: list<NumberFilter>|null,
     *     exploitAvailable?: list<StringFilter>|null,
     *     findingArn?: list<StringFilter>|null,
     *     findingStatus?: list<StringFilter>|null,
     *     findingType?: list<StringFilter>|null,
     *     firstObservedAt?: list<DateFilter>|null,
     *     fixAvailable?: list<StringFilter>|null,
     *     inspectorScore?: list<NumberFilter>|null,
     *     lambdaFunctionExecutionRoleArn?: list<StringFilter>|null,
     *     lambdaFunctionLastModifiedAt?: list<DateFilter>|null,
     *     lambdaFunctionLayers?: list<StringFilter>|null,
     *     lambdaFunctionName?: list<StringFilter>|null,
     *     lambdaFunctionRuntime?: list<StringFilter>|null,
     *     lastObservedAt?: list<DateFilter>|null,
     *     networkProtocol?: list<StringFilter>|null,
     *     portRange?: list<PortRangeFilter>|null,
     *     relatedVulnerabilities?: list<StringFilter>|null,
     *     resourceId?: list<StringFilter>|null,
     *     resourceTags?: list<MapFilter>|null,
     *     resourceType?: list<StringFilter>|null,
     *     severity?: list<StringFilter>|null,
     *     title?: list<StringFilter>|null,
     *     updatedAt?: list<DateFilter>|null,
     *     vendorSeverity?: list<StringFilter>|null,
     *     vulnerabilityId?: list<StringFilter>|null,
     *     vulnerabilitySource?: list<StringFilter>|null,
     *     vulnerablePackages?: list<PackageFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
