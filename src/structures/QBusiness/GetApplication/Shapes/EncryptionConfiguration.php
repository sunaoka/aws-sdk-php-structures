<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
