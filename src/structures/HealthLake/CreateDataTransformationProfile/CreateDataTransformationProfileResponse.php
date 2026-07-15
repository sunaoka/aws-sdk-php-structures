<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProfileId
 * @property int<0, 99> $Version
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property 'FHIR_R4' $TargetFormat
 * @property string $ProfileName
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class CreateDataTransformationProfileResponse extends Response
{
}
