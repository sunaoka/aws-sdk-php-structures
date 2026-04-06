<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrustStore|null $TrustStore
 */
class TlsAuthConfiguration extends Shape
{
    /**
     * @param array{TrustStore?: TrustStore|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
