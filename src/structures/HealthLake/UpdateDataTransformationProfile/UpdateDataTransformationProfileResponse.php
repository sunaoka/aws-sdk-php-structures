<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateDataTransformationProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProfileId
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property 'FHIR_R4' $TargetFormat
 * @property string|null $ProfileName
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class UpdateDataTransformationProfileResponse extends Response
{
}
