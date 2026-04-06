<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIdentityIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrincipalArn
 * @property string $Resource
 * @property bool $UseLongIds
 */
class ModifyIdentityIdFormatRequest extends Request
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     Resource: string,
     *     UseLongIds: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
