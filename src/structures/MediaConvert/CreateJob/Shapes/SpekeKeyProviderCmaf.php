<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property list<string>|null $DashSignaledSystemIds
 * @property EncryptionContractConfiguration|null $EncryptionContractConfiguration
 * @property list<string>|null $HlsSignaledSystemIds
 * @property string|null $ResourceId
 * @property string|null $Url
 */
class SpekeKeyProviderCmaf extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DashSignaledSystemIds?: list<string>|null,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration|null,
     *     HlsSignaledSystemIds?: list<string>|null,
     *     ResourceId?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
