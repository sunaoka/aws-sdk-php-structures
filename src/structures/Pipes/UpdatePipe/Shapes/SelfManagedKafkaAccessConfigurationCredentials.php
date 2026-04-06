<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BasicAuth
 * @property string|null $ClientCertificateTlsAuth
 * @property string|null $SaslScram256Auth
 * @property string|null $SaslScram512Auth
 */
class SelfManagedKafkaAccessConfigurationCredentials extends Shape
{
    /**
     * @param array{
     *     BasicAuth?: string|null,
     *     ClientCertificateTlsAuth?: string|null,
     *     SaslScram256Auth?: string|null,
     *     SaslScram512Auth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
