<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateCustomPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $CustomPermissionsName
 * @property Shapes\Capabilities|null $Capabilities
 * @property Shapes\Governance|null $Governance
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCustomPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     CustomPermissionsName: string,
     *     Capabilities?: Shapes\Capabilities|null,
     *     Governance?: Shapes\Governance|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
