<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySelfservicePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\SelfservicePermissions $SelfservicePermissions
 */
class ModifySelfservicePermissionsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     SelfservicePermissions: Shapes\SelfservicePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
