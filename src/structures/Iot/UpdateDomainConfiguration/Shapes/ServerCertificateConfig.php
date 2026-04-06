<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableOCSPCheck
 */
class ServerCertificateConfig extends Shape
{
    /**
     * @param array{enableOCSPCheck?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
