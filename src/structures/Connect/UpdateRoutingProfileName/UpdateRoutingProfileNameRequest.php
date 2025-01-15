<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateRoutingProfileNameRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
