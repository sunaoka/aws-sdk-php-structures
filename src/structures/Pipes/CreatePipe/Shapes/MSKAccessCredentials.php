<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientCertificateTlsAuth
 * @property string|null $SaslScram512Auth
 */
class MSKAccessCredentials extends Shape
{
    /**
     * @param array{
     *     ClientCertificateTlsAuth?: string|null,
     *     SaslScram512Auth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
