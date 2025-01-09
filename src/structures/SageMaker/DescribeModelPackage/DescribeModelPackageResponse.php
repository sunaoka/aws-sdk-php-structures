<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelPackageName
 * @property string $ModelPackageGroupName
 * @property int $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\InferenceSpecification $InferenceSpecification
 * @property Shapes\SourceAlgorithmSpecification $SourceAlgorithmSpecification
 * @property Shapes\ModelPackageValidationSpecification $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property Shapes\ModelPackageStatusDetails $ModelPackageStatusDetails
 * @property bool $CertifyForMarketplace
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 * @property Shapes\UserContext $CreatedBy
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property Shapes\ModelMetrics $ModelMetrics
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property string $ApprovalDescription
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
class DescribeModelPackageResponse extends Response
{
}
