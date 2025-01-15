<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OCSPUrl
 */
class ClientCertAuthSettings extends Shape
{
    /**
     * @param array{OCSPUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
