<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetKMSEncryptionKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsEncryptionKeyArn
 */
class KMSKey extends Shape
{
    /**
     * @param array{kmsEncryptionKeyArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
