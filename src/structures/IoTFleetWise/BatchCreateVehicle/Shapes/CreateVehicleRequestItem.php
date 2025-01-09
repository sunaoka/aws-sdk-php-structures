<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string> $attributes
 * @property 'CreateIotThing'|'ValidateIotThingExists' $associationBehavior
 * @property list<Tag> $tags
 * @property list<StateTemplateAssociation> $stateTemplates
 */
class CreateVehicleRequestItem extends Shape
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn: string,
     *     decoderManifestArn: string,
     *     attributes?: array<string, string>,
     *     associationBehavior?: 'CreateIotThing'|'ValidateIotThingExists',
     *     tags?: list<Tag>,
     *     stateTemplates?: list<StateTemplateAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
