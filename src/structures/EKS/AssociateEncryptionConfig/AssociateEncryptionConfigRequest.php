<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property list<Shapes\EncryptionConfig> $encryptionConfig
 * @property string|null $clientRequestToken
 */
class AssociateEncryptionConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     encryptionConfig: list<Shapes\EncryptionConfig>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
