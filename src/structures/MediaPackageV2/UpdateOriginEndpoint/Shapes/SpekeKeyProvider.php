<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property string $ResourceId
 * @property list<'CLEAR_KEY_AES_128'|'FAIRPLAY'|'PLAYREADY'|'WIDEVINE'|'IRDETO'> $DrmSystems
 * @property string $RoleArn
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     EncryptionContractConfiguration: EncryptionContractConfiguration,
     *     ResourceId: string,
     *     DrmSystems: list<'CLEAR_KEY_AES_128'|'FAIRPLAY'|'PLAYREADY'|'WIDEVINE'|'IRDETO'>,
     *     RoleArn: string,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
