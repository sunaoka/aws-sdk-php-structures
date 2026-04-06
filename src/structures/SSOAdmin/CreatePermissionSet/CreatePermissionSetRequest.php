<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $InstanceArn
 * @property string|null $SessionDuration
 * @property string|null $RelayState
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     InstanceArn: string,
     *     SessionDuration?: string|null,
     *     RelayState?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
