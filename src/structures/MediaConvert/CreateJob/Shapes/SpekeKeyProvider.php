<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property string $ResourceId
 * @property list<string> $SystemIds
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration,
     *     ResourceId?: string,
     *     SystemIds?: list<string>,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
