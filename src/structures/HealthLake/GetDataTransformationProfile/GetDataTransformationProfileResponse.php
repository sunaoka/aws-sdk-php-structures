<?php

namespace Sunaoka\Aws\Structures\HealthLake\GetDataTransformationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProfileId
 * @property int<0, 99> $Version
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property 'FHIR_R4' $TargetFormat
 * @property array<string, string> $ProfileMapping
 * @property string|null $ProfileName
 * @property string|null $ProfileDescription
 * @property string|null $ChangeDescription
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class GetDataTransformationProfileResponse extends Response
{
}
