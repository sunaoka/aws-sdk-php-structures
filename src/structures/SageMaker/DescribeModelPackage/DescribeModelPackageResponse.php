<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelPackageName
 * @property string|null $ModelPackageGroupName
 * @property int<1, max>|null $ModelPackageVersion
 * @property 'Logged'|'Registered'|null $ModelPackageRegistrationType
 * @property string $ModelPackageArn
 * @property string|null $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\InferenceSpecification|null $InferenceSpecification
 * @property Shapes\SourceAlgorithmSpecification|null $SourceAlgorithmSpecification
 * @property Shapes\ModelPackageValidationSpecification|null $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property Shapes\ModelPackageStatusDetails $ModelPackageStatusDetails
 * @property bool|null $CertifyForMarketplace
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property Shapes\UserContext|null $CreatedBy
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property Shapes\ModelMetrics|null $ModelMetrics
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property string|null $ApprovalDescription
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
class DescribeModelPackageResponse extends Response
{
}
