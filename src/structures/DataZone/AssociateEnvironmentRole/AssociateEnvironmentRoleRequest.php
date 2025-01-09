<?php

namespace Sunaoka\Aws\Structures\DataZone\AssociateEnvironmentRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $environmentRoleArn
 */
class AssociateEnvironmentRoleRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     environmentRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
