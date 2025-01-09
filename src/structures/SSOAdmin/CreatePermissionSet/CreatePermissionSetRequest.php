<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property string $RelayState
 * @property string $SessionDuration
 * @property list<Shapes\Tag> $Tags
 */
class CreatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     InstanceArn: string,
     *     Name: string,
     *     RelayState?: string,
     *     SessionDuration?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
