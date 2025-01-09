<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $vehicleName
 * @property string $arn
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property array<string, string> $attributes
 * @property list<Shapes\StateTemplateAssociation> $stateTemplates
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetVehicleResponse extends Response
{
}
