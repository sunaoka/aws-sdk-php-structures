<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES_128'|'SAMPLE_AES'|null $TsEncryptionMethod
 * @property 'CENC'|'CBCS'|null $CmafEncryptionMethod
 */
class EncryptionMethod extends Shape
{
    /**
     * @param array{
     *     TsEncryptionMethod?: 'AES_128'|'SAMPLE_AES'|null,
     *     CmafEncryptionMethod?: 'CENC'|'CBCS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
