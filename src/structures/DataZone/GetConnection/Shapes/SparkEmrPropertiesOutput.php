<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $computeArn
 * @property UsernamePassword|null $credentials
 * @property \Aws\Api\DateTimeResult|null $credentialsExpiration
 * @property 'AWS_MANAGED'|'USER_MANAGED'|null $governanceType
 * @property string|null $instanceProfileArn
 * @property string|null $javaVirtualEnv
 * @property string|null $livyEndpoint
 * @property string|null $logUri
 * @property string|null $pythonVirtualEnv
 * @property string|null $runtimeRole
 * @property string|null $trustedCertificatesS3Uri
 */
class SparkEmrPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     computeArn?: string|null,
     *     credentials?: UsernamePassword|null,
     *     credentialsExpiration?: \Aws\Api\DateTimeResult|null,
     *     governanceType?: 'AWS_MANAGED'|'USER_MANAGED'|null,
     *     instanceProfileArn?: string|null,
     *     javaVirtualEnv?: string|null,
     *     livyEndpoint?: string|null,
     *     logUri?: string|null,
     *     pythonVirtualEnv?: string|null,
     *     runtimeRole?: string|null,
     *     trustedCertificatesS3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
