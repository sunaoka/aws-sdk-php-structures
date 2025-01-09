<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string> $attributes
 * @property 'Overwrite'|'Merge' $attributeUpdateMode
 * @property list<StateTemplateAssociation> $stateTemplatesToAdd
 * @property list<string> $stateTemplatesToRemove
 */
class UpdateVehicleRequestItem extends Shape
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn?: string,
     *     decoderManifestArn?: string,
     *     attributes?: array<string, string>,
     *     attributeUpdateMode?: 'Overwrite'|'Merge',
     *     stateTemplatesToAdd?: list<StateTemplateAssociation>,
     *     stateTemplatesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
