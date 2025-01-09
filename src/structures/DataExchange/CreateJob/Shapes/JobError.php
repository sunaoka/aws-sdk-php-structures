<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'MALWARE_DETECTED'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'VALIDATION_EXCEPTION'|'MALWARE_SCAN_ENCRYPTED_FILE' $Code
 * @property Details $Details
 * @property 'Assets per revision'|'Asset size in GB'|'Amazon Redshift datashare assets per revision'|'AWS Lake Formation data permission assets per revision'|'Amazon S3 data access assets per revision' $LimitName
 * @property double $LimitValue
 * @property string $Message
 * @property string $ResourceId
 * @property 'REVISION'|'ASSET'|'DATA_SET' $ResourceType
 */
class JobError extends Shape
{
    /**
     * @param array{
     *     Code: 'ACCESS_DENIED_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'MALWARE_DETECTED'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'VALIDATION_EXCEPTION'|'MALWARE_SCAN_ENCRYPTED_FILE',
     *     Details?: Details,
     *     LimitName?: 'Assets per revision'|'Asset size in GB'|'Amazon Redshift datashare assets per revision'|'AWS Lake Formation data permission assets per revision'|'Amazon S3 data access assets per revision',
     *     LimitValue?: double,
     *     Message: string,
     *     ResourceId?: string,
     *     ResourceType?: 'REVISION'|'ASSET'|'DATA_SET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
