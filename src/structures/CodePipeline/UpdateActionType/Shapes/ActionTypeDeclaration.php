<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property ActionTypeExecutor $executor
 * @property ActionTypeIdentifier $id
 * @property ActionTypeArtifactDetails $inputArtifactDetails
 * @property ActionTypeArtifactDetails $outputArtifactDetails
 * @property ActionTypePermissions|null $permissions
 * @property list<ActionTypeProperty>|null $properties
 * @property ActionTypeUrls|null $urls
 */
class ActionTypeDeclaration extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     executor: ActionTypeExecutor,
     *     id: ActionTypeIdentifier,
     *     inputArtifactDetails: ActionTypeArtifactDetails,
     *     outputArtifactDetails: ActionTypeArtifactDetails,
     *     permissions?: ActionTypePermissions|null,
     *     properties?: list<ActionTypeProperty>|null,
     *     urls?: ActionTypeUrls|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
