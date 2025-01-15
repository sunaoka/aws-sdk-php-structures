<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Encrypted
 * @property string|null $CmkArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     Encrypted: bool,
     *     CmkArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
