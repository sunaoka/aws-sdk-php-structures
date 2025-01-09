<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyIdentifier
 * @property bool $EncryptionEnabled
 */
class PackageEncryptionOptions extends Shape
{
    /**
     * @param array{
     *     KmsKeyIdentifier?: string,
     *     EncryptionEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
