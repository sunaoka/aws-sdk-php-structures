<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property string $ResourceId
 * @property list<'CLEAR_KEY_AES_128'|'FAIRPLAY'|'PLAYREADY'|'WIDEVINE'|'IRDETO'> $DrmSystems
 * @property string $RoleArn
 * @property string $Url
 * @property string|null $CertificateArn
 * @property 'V2_0'|'V2_1'|null $SpekeVersion
 * @property ContentKeyPeriodConfiguration|null $ContentKeyPeriodConfiguration
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     EncryptionContractConfiguration: EncryptionContractConfiguration,
     *     ResourceId: string,
     *     DrmSystems: list<'CLEAR_KEY_AES_128'|'FAIRPLAY'|'PLAYREADY'|'WIDEVINE'|'IRDETO'>,
     *     RoleArn: string,
     *     Url: string,
     *     CertificateArn?: string|null,
     *     SpekeVersion?: 'V2_0'|'V2_1'|null,
     *     ContentKeyPeriodConfiguration?: ContentKeyPeriodConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
