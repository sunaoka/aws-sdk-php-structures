<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateCustomKeyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $RawSecretAccessKey
 */
class XksProxyAuthenticationCredentialType extends Shape
{
    /**
     * @param array{
     *     AccessKeyId: string,
     *     RawSecretAccessKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
