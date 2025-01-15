<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $InvocationRole
 * @property string|null $DirectoryId
 * @property string|null $Function
 * @property 'PASSWORD'|'PUBLIC_KEY'|'PUBLIC_KEY_OR_PASSWORD'|'PUBLIC_KEY_AND_PASSWORD'|null $SftpAuthenticationMethods
 */
class IdentityProviderDetails extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     InvocationRole?: string|null,
     *     DirectoryId?: string|null,
     *     Function?: string|null,
     *     SftpAuthenticationMethods?: 'PASSWORD'|'PUBLIC_KEY'|'PUBLIC_KEY_OR_PASSWORD'|'PUBLIC_KEY_AND_PASSWORD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
