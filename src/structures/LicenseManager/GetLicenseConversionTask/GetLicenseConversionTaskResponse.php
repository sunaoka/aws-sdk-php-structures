<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LicenseConversionTaskId
 * @property string $ResourceArn
 * @property Shapes\LicenseConversionContext $SourceLicenseContext
 * @property Shapes\LicenseConversionContext $DestinationLicenseContext
 * @property string $StatusMessage
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $LicenseConversionTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class GetLicenseConversionTaskResponse extends Response
{
}
