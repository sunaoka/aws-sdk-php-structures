<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string>|null $attributes
 * @property 'CreateIotThing'|'ValidateIotThingExists'|null $associationBehavior
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\StateTemplateAssociation>|null $stateTemplates
 */
class CreateVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn: string,
     *     decoderManifestArn: string,
     *     attributes?: array<string, string>|null,
     *     associationBehavior?: 'CreateIotThing'|'ValidateIotThingExists'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     stateTemplates?: list<Shapes\StateTemplateAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
