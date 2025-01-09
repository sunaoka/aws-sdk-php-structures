<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Encrypted
 * @property string $CmkArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     Encrypted: bool,
     *     CmkArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
