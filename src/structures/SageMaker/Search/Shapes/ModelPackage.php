<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageName
 * @property string $ModelPackageGroupName
 * @property int $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property InferenceSpecification $InferenceSpecification
 * @property SourceAlgorithmSpecification $SourceAlgorithmSpecification
 * @property ModelPackageValidationSpecification $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property ModelPackageStatusDetails $ModelPackageStatusDetails
 * @property bool $CertifyForMarketplace
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 * @property UserContext $CreatedBy
 * @property MetadataProperties $MetadataProperties
 * @property ModelMetrics $ModelMetrics
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 * @property string $ApprovalDescription
 * @property string $Domain
 * @property string $Task
 * @property string $SamplePayloadUrl
 * @property list<AdditionalInferenceSpecificationDefinition> $AdditionalInferenceSpecifications
 * @property string $SourceUri
 * @property ModelPackageSecurityConfig $SecurityConfig
 * @property ModelPackageModelCard $ModelCard
 * @property ModelLifeCycle $ModelLifeCycle
 * @property list<Tag> $Tags
 * @property array<string, string> $CustomerMetadataProperties
 * @property DriftCheckBaselines $DriftCheckBaselines
 * @property 'All'|'None' $SkipModelValidation
 */
class ModelPackage extends Shape
{
    /**
     * @param array{
     *     ModelPackageName?: string,
     *     ModelPackageGroupName?: string,
     *     ModelPackageVersion?: int,
     *     ModelPackageArn?: string,
     *     ModelPackageDescription?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     InferenceSpecification?: InferenceSpecification,
     *     SourceAlgorithmSpecification?: SourceAlgorithmSpecification,
     *     ValidationSpecification?: ModelPackageValidationSpecification,
     *     ModelPackageStatus?: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting',
     *     ModelPackageStatusDetails?: ModelPackageStatusDetails,
     *     CertifyForMarketplace?: bool,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval',
     *     CreatedBy?: UserContext,
     *     MetadataProperties?: MetadataProperties,
     *     ModelMetrics?: ModelMetrics,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext,
     *     ApprovalDescription?: string,
     *     Domain?: string,
     *     Task?: string,
     *     SamplePayloadUrl?: string,
     *     AdditionalInferenceSpecifications?: list<AdditionalInferenceSpecificationDefinition>,
     *     SourceUri?: string,
     *     SecurityConfig?: ModelPackageSecurityConfig,
     *     ModelCard?: ModelPackageModelCard,
     *     ModelLifeCycle?: ModelLifeCycle,
     *     Tags?: list<Tag>,
     *     CustomerMetadataProperties?: array<string, string>,
     *     DriftCheckBaselines?: DriftCheckBaselines,
     *     SkipModelValidation?: 'All'|'None'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
