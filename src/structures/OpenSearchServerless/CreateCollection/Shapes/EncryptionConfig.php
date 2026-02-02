<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $aWSOwnedKey
 * @property string|null $kmsKeyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     aWSOwnedKey?: bool|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
