<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'MALWARE_DETECTED'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'VALIDATION_EXCEPTION'|'MALWARE_SCAN_ENCRYPTED_FILE' $Code
 * @property Details|null $Details
 * @property 'Assets per revision'|'Asset size in GB'|'Amazon Redshift datashare assets per revision'|'AWS Lake Formation data permission assets per revision'|'Amazon S3 data access assets per revision'|null $LimitName
 * @property double|null $LimitValue
 * @property string $Message
 * @property string|null $ResourceId
 * @property 'REVISION'|'ASSET'|'DATA_SET'|null $ResourceType
 */
class JobError extends Shape
{
    /**
     * @param array{
     *     Code: 'ACCESS_DENIED_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'MALWARE_DETECTED'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'VALIDATION_EXCEPTION'|'MALWARE_SCAN_ENCRYPTED_FILE',
     *     Details?: Details|null,
     *     LimitName?: 'Assets per revision'|'Asset size in GB'|'Amazon Redshift datashare assets per revision'|'AWS Lake Formation data permission assets per revision'|'Amazon S3 data access assets per revision'|null,
     *     LimitValue?: double|null,
     *     Message: string,
     *     ResourceId?: string|null,
     *     ResourceType?: 'REVISION'|'ASSET'|'DATA_SET'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
