<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreateCustomActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionTypeId $id
 * @property ActionTypeSettings|null $settings
 * @property list<ActionConfigurationProperty>|null $actionConfigurationProperties
 * @property ArtifactDetails $inputArtifactDetails
 * @property ArtifactDetails $outputArtifactDetails
 */
class ActionType extends Shape
{
    /**
     * @param array{
     *     id: ActionTypeId,
     *     settings?: ActionTypeSettings|null,
     *     actionConfigurationProperties?: list<ActionConfigurationProperty>|null,
     *     inputArtifactDetails: ArtifactDetails,
     *     outputArtifactDetails: ArtifactDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
