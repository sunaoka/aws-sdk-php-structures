<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeArn
 * @property string $instanceProfileArn
 * @property string $javaVirtualEnv
 * @property string $logUri
 * @property string $pythonVirtualEnv
 * @property string $runtimeRole
 * @property string $trustedCertificatesS3Uri
 */
class SparkEmrPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     computeArn?: string,
     *     instanceProfileArn?: string,
     *     javaVirtualEnv?: string,
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
