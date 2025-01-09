<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $InvocationRole
 * @property string $DirectoryId
 * @property string $Function
 * @property 'PASSWORD'|'PUBLIC_KEY'|'PUBLIC_KEY_OR_PASSWORD'|'PUBLIC_KEY_AND_PASSWORD' $SftpAuthenticationMethods
 */
class IdentityProviderDetails extends Shape
{
    /**
     * @param array{
     *     Url?: string,
     *     InvocationRole?: string,
     *     DirectoryId?: string,
     *     Function?: string,
     *     SftpAuthenticationMethods?: 'PASSWORD'|'PUBLIC_KEY'|'PUBLIC_KEY_OR_PASSWORD'|'PUBLIC_KEY_AND_PASSWORD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
