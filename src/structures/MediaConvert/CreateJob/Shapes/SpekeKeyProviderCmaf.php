<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property list<string> $DashSignaledSystemIds
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property list<string> $HlsSignaledSystemIds
 * @property string $ResourceId
 * @property string $Url
 */
class SpekeKeyProviderCmaf extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     DashSignaledSystemIds?: list<string>,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration,
     *     HlsSignaledSystemIds?: list<string>,
     *     ResourceId?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
