<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property ActionTypeExecutor $executor
 * @property ActionTypeIdentifier $id
 * @property ActionTypeArtifactDetails $inputArtifactDetails
 * @property ActionTypeArtifactDetails $outputArtifactDetails
 * @property ActionTypePermissions $permissions
 * @property list<ActionTypeProperty> $properties
 * @property ActionTypeUrls $urls
 */
class ActionTypeDeclaration extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     executor: ActionTypeExecutor,
     *     id: ActionTypeIdentifier,
     *     inputArtifactDetails: ActionTypeArtifactDetails,
     *     outputArtifactDetails: ActionTypeArtifactDetails,
     *     permissions?: ActionTypePermissions,
     *     properties?: list<ActionTypeProperty>,
     *     urls?: ActionTypeUrls
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
