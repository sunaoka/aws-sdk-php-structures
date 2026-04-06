<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string|null $modelManifestArn
 * @property string|null $decoderManifestArn
 * @property array<string, string>|null $attributes
 * @property 'Overwrite'|'Merge'|null $attributeUpdateMode
 * @property list<Shapes\StateTemplateAssociation>|null $stateTemplatesToAdd
 * @property list<string>|null $stateTemplatesToRemove
 * @property list<Shapes\StateTemplateAssociation>|null $stateTemplatesToUpdate
 */
class UpdateVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn?: string|null,
     *     decoderManifestArn?: string|null,
     *     attributes?: array<string, string>|null,
     *     attributeUpdateMode?: 'Overwrite'|'Merge'|null,
     *     stateTemplatesToAdd?: list<Shapes\StateTemplateAssociation>|null,
     *     stateTemplatesToRemove?: list<string>|null,
     *     stateTemplatesToUpdate?: list<Shapes\StateTemplateAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
