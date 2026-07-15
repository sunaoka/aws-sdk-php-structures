<?php

namespace Sunaoka\Aws\Structures\HealthLake\PublishDataTransformationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProfileId
 * @property int<0, 99> $Version
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property 'FHIR_R4' $TargetFormat
 * @property string|null $ProfileName
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class PublishDataTransformationProfileResponse extends Response
{
}
