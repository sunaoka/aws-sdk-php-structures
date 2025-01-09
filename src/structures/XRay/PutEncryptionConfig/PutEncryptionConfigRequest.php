<?php

namespace Sunaoka\Aws\Structures\XRay\PutEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property 'NONE'|'KMS' $Type
 */
class PutEncryptionConfigRequest extends Request
{
    /**
     * @param array{
     *     KeyId?: string,
     *     Type: 'NONE'|'KMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
