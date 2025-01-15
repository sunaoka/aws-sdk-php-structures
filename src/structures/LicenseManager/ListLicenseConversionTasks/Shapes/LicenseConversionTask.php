<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LicenseConversionTaskId
 * @property string|null $ResourceArn
 * @property LicenseConversionContext|null $SourceLicenseContext
 * @property LicenseConversionContext|null $DestinationLicenseContext
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LicenseConversionTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class LicenseConversionTask extends Shape
{
    /**
     * @param array{
     *     LicenseConversionTaskId?: string|null,
     *     ResourceArn?: string|null,
     *     SourceLicenseContext?: LicenseConversionContext|null,
     *     DestinationLicenseContext?: LicenseConversionContext|null,
     *     Status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LicenseConversionTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
