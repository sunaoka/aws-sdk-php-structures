<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermissionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $version
 * @property bool $defaultVersion
 * @property string $name
 * @property string $resourceType
 * @property string $permission
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property bool $isResourceTypeDefault
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED' $permissionType
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD' $featureSet
 * @property 'ATTACHABLE'|'UNATTACHABLE'|'DELETING'|'DELETED' $status
 * @property list<Tag> $tags
 */
class ResourceSharePermissionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     version?: string,
     *     defaultVersion?: bool,
     *     name?: string,
     *     resourceType?: string,
     *     permission?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     isResourceTypeDefault?: bool,
     *     permissionType?: 'CUSTOMER_MANAGED'|'AWS_MANAGED',
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD',
     *     status?: 'ATTACHABLE'|'UNATTACHABLE'|'DELETING'|'DELETED',
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
