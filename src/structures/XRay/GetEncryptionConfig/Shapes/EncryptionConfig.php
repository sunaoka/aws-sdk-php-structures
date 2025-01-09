<?php

namespace Sunaoka\Aws\Structures\XRay\GetEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property 'UPDATING'|'ACTIVE' $Status
 * @property 'NONE'|'KMS' $Type
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     KeyId?: string,
     *     Status?: 'UPDATING'|'ACTIVE',
     *     Type?: 'NONE'|'KMS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
