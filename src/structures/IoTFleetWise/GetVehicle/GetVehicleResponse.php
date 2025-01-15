<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $vehicleName
 * @property string|null $arn
 * @property string|null $modelManifestArn
 * @property string|null $decoderManifestArn
 * @property array<string, string>|null $attributes
 * @property list<Shapes\StateTemplateAssociation>|null $stateTemplates
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModificationTime
 */
class GetVehicleResponse extends Response
{
}
