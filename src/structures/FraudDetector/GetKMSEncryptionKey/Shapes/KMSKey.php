<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetKMSEncryptionKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsEncryptionKeyArn
 */
class KMSKey extends Shape
{
    /**
     * @param array{kmsEncryptionKeyArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
