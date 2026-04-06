<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIdentityIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property bool $UseLongIds
 * @property string $PrincipalArn
 */
class ModifyIdentityIdFormatRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     UseLongIds: bool,
     *     PrincipalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
