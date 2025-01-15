<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $permissionVersion
 * @property bool|null $defaultVersion
 * @property string|null $resourceType
 * @property string|null $status
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null $featureSet
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property string|null $resourceShareArn
 */
class AssociatedPermission extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     permissionVersion?: string|null,
     *     defaultVersion?: bool|null,
     *     resourceType?: string|null,
     *     status?: string|null,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     resourceShareArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
