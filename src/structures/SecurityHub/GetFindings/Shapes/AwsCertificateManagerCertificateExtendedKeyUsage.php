<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $OId
 */
class AwsCertificateManagerCertificateExtendedKeyUsage extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     OId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
