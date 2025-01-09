<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageName
 * @property string $ModelPackageGroupName
 * @property string $ModelPackageDescription
 * @property Shapes\InferenceSpecification $InferenceSpecification
 * @property Shapes\ModelPackageValidationSpecification $ValidationSpecification
 * @property Shapes\SourceAlgorithmSpecification $SourceAlgorithmSpecification
 * @property bool $CertifyForMarketplace
 * @property list<Shapes\Tag> $Tags
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property Shapes\ModelMetrics $ModelMetrics
 * @property string $ClientToken
 * @property string $Domain
 * @property string $Task
 * @property string $SamplePayloadUrl
 * @property array<string, string> $CustomerMetadataProperties
 * @property Shapes\DriftCheckBaselines $DriftCheckBaselines
 * @property list<Shapes\AdditionalInferenceSpecificationDefinition> $AdditionalInferenceSpecifications
 * @property 'All'|'None' $SkipModelValidation
 * @property string $SourceUri
 * @property Shapes\ModelPackageSecurityConfig $SecurityConfig
 * @property Shapes\ModelPackageModelCard $ModelCard
 * @property Shapes\ModelLifeCycle $ModelLifeCycle
 */
class CreateModelPackageRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageName?: string,
     *     ModelPackageGroupName?: string,
     *     ModelPackageDescription?: string,
     *     InferenceSpecification?: Shapes\InferenceSpecification,
     *     ValidationSpecification?: Shapes\ModelPackageValidationSpecification,
     *     SourceAlgorithmSpecification?: Shapes\SourceAlgorithmSpecification,
     *     CertifyForMarketplace?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval',
     *     MetadataProperties?: Shapes\MetadataProperties,
     *     ModelMetrics?: Shapes\ModelMetrics,
     *     ClientToken?: string,
     *     Domain?: string,
     *     Task?: string,
     *     SamplePayloadUrl?: string,
     *     CustomerMetadataProperties?: array<string, string>,
     *     DriftCheckBaselines?: Shapes\DriftCheckBaselines,
     *     AdditionalInferenceSpecifications?: list<Shapes\AdditionalInferenceSpecificationDefinition>,
     *     SkipModelValidation?: 'All'|'None',
     *     SourceUri?: string,
     *     SecurityConfig?: Shapes\ModelPackageSecurityConfig,
     *     ModelCard?: Shapes\ModelPackageModelCard,
     *     ModelLifeCycle?: Shapes\ModelLifeCycle
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
