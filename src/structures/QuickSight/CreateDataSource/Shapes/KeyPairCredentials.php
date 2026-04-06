<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyPairUsername
 * @property string $PrivateKey
 * @property string|null $PrivateKeyPassphrase
 */
class KeyPairCredentials extends Shape
{
    /**
     * @param array{
     *     KeyPairUsername: string,
     *     PrivateKey: string,
     *     PrivateKeyPassphrase?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
