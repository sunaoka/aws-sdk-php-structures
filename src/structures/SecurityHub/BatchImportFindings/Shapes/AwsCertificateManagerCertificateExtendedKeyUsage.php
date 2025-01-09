<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $OId
 */
class AwsCertificateManagerCertificateExtendedKeyUsage extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     OId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
