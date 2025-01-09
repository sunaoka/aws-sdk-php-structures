<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageArn
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 * @property string $ApprovalDescription
 * @property array<string, string> $CustomerMetadataProperties
 * @property list<string> $CustomerMetadataPropertiesToRemove
 * @property list<Shapes\AdditionalInferenceSpecificationDefinition> $AdditionalInferenceSpecificationsToAdd
 * @property Shapes\InferenceSpecification $InferenceSpecification
 * @property string $SourceUri
 * @property Shapes\ModelPackageModelCard $ModelCard
 * @property Shapes\ModelLifeCycle $ModelLifeCycle
 * @property string $ClientToken
 */
class UpdateModelPackageRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageArn: string,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval',
     *     ApprovalDescription?: string,
     *     CustomerMetadataProperties?: array<string, string>,
     *     CustomerMetadataPropertiesToRemove?: list<string>,
     *     AdditionalInferenceSpecificationsToAdd?: list<Shapes\AdditionalInferenceSpecificationDefinition>,
     *     InferenceSpecification?: Shapes\InferenceSpecification,
     *     SourceUri?: string,
     *     ModelCard?: Shapes\ModelPackageModelCard,
     *     ModelLifeCycle?: Shapes\ModelLifeCycle,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
