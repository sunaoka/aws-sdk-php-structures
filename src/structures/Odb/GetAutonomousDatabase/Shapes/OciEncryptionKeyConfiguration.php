<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property string $vaultId
 */
class OciEncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId: string,
     *     vaultId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
