<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageArn
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property string|null $ApprovalDescription
 * @property array<string, string>|null $CustomerMetadataProperties
 * @property list<string>|null $CustomerMetadataPropertiesToRemove
 * @property list<Shapes\AdditionalInferenceSpecificationDefinition>|null $AdditionalInferenceSpecificationsToAdd
 * @property Shapes\InferenceSpecification|null $InferenceSpecification
 * @property string|null $SourceUri
 * @property Shapes\ModelPackageModelCard|null $ModelCard
 * @property Shapes\ModelLifeCycle|null $ModelLifeCycle
 * @property string|null $ClientToken
 */
class UpdateModelPackageRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageArn: string,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'|null,
     *     ApprovalDescription?: string|null,
     *     CustomerMetadataProperties?: array<string, string>|null,
     *     CustomerMetadataPropertiesToRemove?: list<string>|null,
     *     AdditionalInferenceSpecificationsToAdd?: list<Shapes\AdditionalInferenceSpecificationDefinition>|null,
     *     InferenceSpecification?: Shapes\InferenceSpecification|null,
     *     SourceUri?: string|null,
     *     ModelCard?: Shapes\ModelPackageModelCard|null,
     *     ModelLifeCycle?: Shapes\ModelLifeCycle|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
