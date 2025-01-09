<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization $Authorization
 * @property Shapes\EgressAccessLogs $EgressAccessLogs
 * @property string $Id
 * @property array<string, string> $Tags
 */
class CreatePackagingGroupRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization,
     *     EgressAccessLogs?: Shapes\EgressAccessLogs,
     *     Id: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
