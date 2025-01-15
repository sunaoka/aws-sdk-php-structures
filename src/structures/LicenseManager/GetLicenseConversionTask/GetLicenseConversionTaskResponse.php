<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LicenseConversionTaskId
 * @property string|null $ResourceArn
 * @property Shapes\LicenseConversionContext|null $SourceLicenseContext
 * @property Shapes\LicenseConversionContext|null $DestinationLicenseContext
 * @property string|null $StatusMessage
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LicenseConversionTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class GetLicenseConversionTaskResponse extends Response
{
}
