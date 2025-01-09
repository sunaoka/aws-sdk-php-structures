<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string> $attributes
 * @property 'CreateIotThing'|'ValidateIotThingExists' $associationBehavior
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\StateTemplateAssociation> $stateTemplates
 */
class CreateVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     modelManifestArn: string,
     *     decoderManifestArn: string,
     *     attributes?: array<string, string>,
     *     associationBehavior?: 'CreateIotThing'|'ValidateIotThingExists',
     *     tags?: list<Shapes\Tag>,
     *     stateTemplates?: list<Shapes\StateTemplateAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
