<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string|null $modelManifestArn
 * @property string|null $decoderManifestArn
 * @property array<string, string>|null $attributes
 * @property 'Overwrite'|'Merge'|null $attributeUpdateMode
 * @property list<StateTemplateAssociation>|null $stateTemplatesToAdd
 * @property list<string>|null $stateTemplatesToRemove
 */
class UpdateVehicleRequestItem extends Shape
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn?: string|null,
     *     decoderManifestArn?: string|null,
     *     attributes?: array<string, string>|null,
     *     attributeUpdateMode?: 'Overwrite'|'Merge'|null,
     *     stateTemplatesToAdd?: list<StateTemplateAssociation>|null,
     *     stateTemplatesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
