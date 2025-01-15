<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ModelPackageName
 * @property string|null $ModelPackageGroupName
 * @property string|null $ModelPackageDescription
 * @property Shapes\InferenceSpecification|null $InferenceSpecification
 * @property Shapes\ModelPackageValidationSpecification|null $ValidationSpecification
 * @property Shapes\SourceAlgorithmSpecification|null $SourceAlgorithmSpecification
 * @property bool|null $CertifyForMarketplace
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property Shapes\ModelMetrics|null $ModelMetrics
 * @property string|null $ClientToken
 * @property string|null $Domain
 * @property string|null $Task
 * @property string|null $SamplePayloadUrl
 * @property array<string, string>|null $CustomerMetadataProperties
 * @property Shapes\DriftCheckBaselines|null $DriftCheckBaselines
 * @property list<Shapes\AdditionalInferenceSpecificationDefinition>|null $AdditionalInferenceSpecifications
 * @property 'All'|'None'|null $SkipModelValidation
 * @property string|null $SourceUri
 * @property Shapes\ModelPackageSecurityConfig|null $SecurityConfig
 * @property Shapes\ModelPackageModelCard|null $ModelCard
 * @property Shapes\ModelLifeCycle|null $ModelLifeCycle
 */
class CreateModelPackageRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageName?: string|null,
     *     ModelPackageGroupName?: string|null,
     *     ModelPackageDescription?: string|null,
     *     InferenceSpecification?: Shapes\InferenceSpecification|null,
     *     ValidationSpecification?: Shapes\ModelPackageValidationSpecification|null,
     *     SourceAlgorithmSpecification?: Shapes\SourceAlgorithmSpecification|null,
     *     CertifyForMarketplace?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'|null,
     *     MetadataProperties?: Shapes\MetadataProperties|null,
     *     ModelMetrics?: Shapes\ModelMetrics|null,
     *     ClientToken?: string|null,
     *     Domain?: string|null,
     *     Task?: string|null,
     *     SamplePayloadUrl?: string|null,
     *     CustomerMetadataProperties?: array<string, string>|null,
     *     DriftCheckBaselines?: Shapes\DriftCheckBaselines|null,
     *     AdditionalInferenceSpecifications?: list<Shapes\AdditionalInferenceSpecificationDefinition>|null,
     *     SkipModelValidation?: 'All'|'None'|null,
     *     SourceUri?: string|null,
     *     SecurityConfig?: Shapes\ModelPackageSecurityConfig|null,
     *     ModelCard?: Shapes\ModelPackageModelCard|null,
     *     ModelLifeCycle?: Shapes\ModelLifeCycle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
