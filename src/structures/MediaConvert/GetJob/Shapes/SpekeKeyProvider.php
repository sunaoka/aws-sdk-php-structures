<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property EncryptionContractConfiguration|null $EncryptionContractConfiguration
 * @property string|null $ResourceId
 * @property list<string>|null $SystemIds
 * @property string|null $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration|null,
     *     ResourceId?: string|null,
     *     SystemIds?: list<string>|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
