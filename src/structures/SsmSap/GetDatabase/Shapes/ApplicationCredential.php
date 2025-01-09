<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property 'ADMIN' $CredentialType
 * @property string $SecretId
 */
class ApplicationCredential extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     CredentialType: 'ADMIN',
     *     SecretId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
