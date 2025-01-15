<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization|null $Authorization
 * @property Shapes\EgressAccessLogs|null $EgressAccessLogs
 * @property string $Id
 * @property array<string, string>|null $Tags
 */
class CreatePackagingGroupRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization|null,
     *     EgressAccessLogs?: Shapes\EgressAccessLogs|null,
     *     Id: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
