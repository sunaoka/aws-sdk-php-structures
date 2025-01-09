<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BasicAuth
 * @property string $SaslScram512Auth
 * @property string $SaslScram256Auth
 * @property string $ClientCertificateTlsAuth
 */
class SelfManagedKafkaAccessConfigurationCredentials extends Shape
{
    /**
     * @param array{
     *     BasicAuth?: string,
     *     SaslScram512Auth?: string,
     *     SaslScram256Auth?: string,
     *     ClientCertificateTlsAuth?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
