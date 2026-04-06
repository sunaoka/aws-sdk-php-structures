<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property string|null $RelayState
 * @property string|null $SessionDuration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     InstanceArn: string,
     *     Name: string,
     *     RelayState?: string|null,
     *     SessionDuration?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
