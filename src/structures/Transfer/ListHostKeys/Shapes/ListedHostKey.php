<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $HostKeyId
 * @property string|null $Fingerprint
 * @property string|null $Description
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $DateImported
 * @property 'SERVICE_MANAGED'|'SECRETS_MANAGER'|null $StorageType
 * @property string|null $SecretId
 */
class ListedHostKey extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HostKeyId?: string|null,
     *     Fingerprint?: string|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     DateImported?: \Aws\Api\DateTimeResult|null,
     *     StorageType?: 'SERVICE_MANAGED'|'SECRETS_MANAGER'|null,
     *     SecretId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
