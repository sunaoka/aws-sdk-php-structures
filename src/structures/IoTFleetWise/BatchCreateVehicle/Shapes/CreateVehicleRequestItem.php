<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string>|null $attributes
 * @property 'CreateIotThing'|'ValidateIotThingExists'|null $associationBehavior
 * @property list<Tag>|null $tags
 * @property list<StateTemplateAssociation>|null $stateTemplates
 */
class CreateVehicleRequestItem extends Shape
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn: string,
     *     decoderManifestArn: string,
     *     attributes?: array<string, string>|null,
     *     associationBehavior?: 'CreateIotThing'|'ValidateIotThingExists'|null,
     *     tags?: list<Tag>|null,
     *     stateTemplates?: list<StateTemplateAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
