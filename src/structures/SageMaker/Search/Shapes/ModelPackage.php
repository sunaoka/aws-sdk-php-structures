<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelPackageName
 * @property string|null $ModelPackageGroupName
 * @property int<1, max>|null $ModelPackageVersion
 * @property 'Logged'|'Registered'|null $ModelPackageRegistrationType
 * @property string|null $ModelPackageArn
 * @property string|null $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property InferenceSpecification|null $InferenceSpecification
 * @property SourceAlgorithmSpecification|null $SourceAlgorithmSpecification
 * @property ModelPackageValidationSpecification|null $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|null $ModelPackageStatus
 * @property ModelPackageStatusDetails|null $ModelPackageStatusDetails
 * @property bool|null $CertifyForMarketplace
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property UserContext|null $CreatedBy
 * @property MetadataProperties|null $MetadataProperties
 * @property ModelMetrics|null $ModelMetrics
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 * @property string|null $ApprovalDescription
 * @property string|null $Domain
 * @property string|null $Task
 * @property string|null $SamplePayloadUrl
 * @property list<AdditionalInferenceSpecificationDefinition>|null $AdditionalInferenceSpecifications
 * @property string|null $SourceUri
 * @property ModelPackageSecurityConfig|null $SecurityConfig
 * @property ModelPackageModelCard|null $ModelCard
 * @property ModelLifeCycle|null $ModelLifeCycle
 * @property list<Tag>|null $Tags
 * @property array<string, string>|null $CustomerMetadataProperties
 * @property DriftCheckBaselines|null $DriftCheckBaselines
 * @property 'All'|'None'|null $SkipModelValidation
 */
class ModelPackage extends Shape
{
    /**
     * @param array{
     *     ModelPackageName?: string|null,
     *     ModelPackageGroupName?: string|null,
     *     ModelPackageVersion?: int<1, max>|null,
     *     ModelPackageRegistrationType?: 'Logged'|'Registered'|null,
     *     ModelPackageArn?: string|null,
     *     ModelPackageDescription?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     InferenceSpecification?: InferenceSpecification|null,
     *     SourceAlgorithmSpecification?: SourceAlgorithmSpecification|null,
     *     ValidationSpecification?: ModelPackageValidationSpecification|null,
     *     ModelPackageStatus?: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|null,
     *     ModelPackageStatusDetails?: ModelPackageStatusDetails|null,
     *     CertifyForMarketplace?: bool|null,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'|null,
     *     CreatedBy?: UserContext|null,
     *     MetadataProperties?: MetadataProperties|null,
     *     ModelMetrics?: ModelMetrics|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null,
     *     ApprovalDescription?: string|null,
     *     Domain?: string|null,
     *     Task?: string|null,
     *     SamplePayloadUrl?: string|null,
     *     AdditionalInferenceSpecifications?: list<AdditionalInferenceSpecificationDefinition>|null,
     *     SourceUri?: string|null,
     *     SecurityConfig?: ModelPackageSecurityConfig|null,
     *     ModelCard?: ModelPackageModelCard|null,
     *     ModelLifeCycle?: ModelLifeCycle|null,
     *     Tags?: list<Tag>|null,
     *     CustomerMetadataProperties?: array<string, string>|null,
     *     DriftCheckBaselines?: DriftCheckBaselines|null,
     *     SkipModelValidation?: 'All'|'None'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
