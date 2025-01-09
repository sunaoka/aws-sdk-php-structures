<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $permissionVersion
 * @property bool $defaultVersion
 * @property string $resourceType
 * @property string $status
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD' $featureSet
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $resourceShareArn
 */
class AssociatedPermission extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     permissionVersion?: string,
     *     defaultVersion?: bool,
     *     resourceType?: string,
     *     status?: string,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD',
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     resourceShareArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
