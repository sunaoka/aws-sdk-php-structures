<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseConversionTaskId
 * @property string $ResourceArn
 * @property LicenseConversionContext $SourceLicenseContext
 * @property LicenseConversionContext $DestinationLicenseContext
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $LicenseConversionTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class LicenseConversionTask extends Shape
{
    /**
     * @param array{
     *     LicenseConversionTaskId?: string,
     *     ResourceArn?: string,
     *     SourceLicenseContext?: LicenseConversionContext,
     *     DestinationLicenseContext?: LicenseConversionContext,
     *     Status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     LicenseConversionTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
