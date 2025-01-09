<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SaslScram512Auth
 * @property string $ClientCertificateTlsAuth
 */
class MSKAccessCredentials extends Shape
{
    /**
     * @param array{
     *     SaslScram512Auth?: string,
     *     ClientCertificateTlsAuth?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
