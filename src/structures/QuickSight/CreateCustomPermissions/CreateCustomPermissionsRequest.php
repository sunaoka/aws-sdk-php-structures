<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateCustomPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $CustomPermissionsName
 * @property Shapes\Capabilities $Capabilities
 * @property list<Shapes\Tag> $Tags
 */
class CreateCustomPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     CustomPermissionsName: string,
     *     Capabilities?: Shapes\Capabilities,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
