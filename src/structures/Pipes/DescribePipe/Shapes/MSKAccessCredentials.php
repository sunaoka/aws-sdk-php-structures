<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SaslScram512Auth
 * @property string|null $ClientCertificateTlsAuth
 */
class MSKAccessCredentials extends Shape
{
    /**
     * @param array{
     *     SaslScram512Auth?: string|null,
     *     ClientCertificateTlsAuth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
