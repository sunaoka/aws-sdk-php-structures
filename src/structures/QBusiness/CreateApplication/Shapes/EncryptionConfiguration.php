<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
