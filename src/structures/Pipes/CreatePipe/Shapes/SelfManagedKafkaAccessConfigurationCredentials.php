<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BasicAuth
 * @property string|null $SaslScram512Auth
 * @property string|null $SaslScram256Auth
 * @property string|null $ClientCertificateTlsAuth
 */
class SelfManagedKafkaAccessConfigurationCredentials extends Shape
{
    /**
     * @param array{
     *     BasicAuth?: string|null,
     *     SaslScram512Auth?: string|null,
     *     SaslScram256Auth?: string|null,
     *     ClientCertificateTlsAuth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
