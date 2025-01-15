<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateCustomPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $CustomPermissionsName
 * @property Shapes\Capabilities|null $Capabilities
 */
class UpdateCustomPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     CustomPermissionsName: string,
     *     Capabilities?: Shapes\Capabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
