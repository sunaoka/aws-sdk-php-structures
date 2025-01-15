<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property EncryptionContractConfiguration|null $EncryptionContractConfiguration
 * @property string $ResourceId
 * @property string $RoleArn
 * @property list<string> $SystemIds
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration|null,
     *     ResourceId: string,
     *     RoleArn: string,
     *     SystemIds: list<string>,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
