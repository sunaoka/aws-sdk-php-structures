<?php

namespace Sunaoka\Aws\Structures\XRay\PutEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property 'UPDATING'|'ACTIVE'|null $Status
 * @property 'NONE'|'KMS'|null $Type
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     Status?: 'UPDATING'|'ACTIVE'|null,
     *     Type?: 'NONE'|'KMS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
