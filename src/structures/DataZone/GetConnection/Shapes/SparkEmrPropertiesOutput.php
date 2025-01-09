<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeArn
 * @property UsernamePassword $credentials
 * @property \Aws\Api\DateTimeResult $credentialsExpiration
 * @property 'AWS_MANAGED'|'USER_MANAGED' $governanceType
 * @property string $instanceProfileArn
 * @property string $javaVirtualEnv
 * @property string $livyEndpoint
 * @property string $logUri
 * @property string $pythonVirtualEnv
 * @property string $runtimeRole
 * @property string $trustedCertificatesS3Uri
 */
class SparkEmrPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     computeArn?: string,
     *     credentials?: UsernamePassword,
     *     credentialsExpiration?: \Aws\Api\DateTimeResult,
     *     governanceType?: 'AWS_MANAGED'|'USER_MANAGED',
     *     instanceProfileArn?: string,
     *     javaVirtualEnv?: string,
     *     livyEndpoint?: string,
     *     logUri?: string,
     *     pythonVirtualEnv?: string,
     *     runtimeRole?: string,
     *     trustedCertificatesS3Uri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
