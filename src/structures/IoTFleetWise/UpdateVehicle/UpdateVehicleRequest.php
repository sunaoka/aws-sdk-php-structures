<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string> $attributes
 * @property 'Overwrite'|'Merge' $attributeUpdateMode
 * @property list<Shapes\StateTemplateAssociation> $stateTemplatesToAdd
 * @property list<string> $stateTemplatesToRemove
 */
class UpdateVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn?: string,
     *     decoderManifestArn?: string,
     *     attributes?: array<string, string>,
     *     attributeUpdateMode?: 'Overwrite'|'Merge',
     *     stateTemplatesToAdd?: list<Shapes\StateTemplateAssociation>,
     *     stateTemplatesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
