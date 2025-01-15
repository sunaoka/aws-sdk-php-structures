<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $version
 * @property bool|null $defaultVersion
 * @property string|null $name
 * @property string|null $resourceType
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property bool|null $isResourceTypeDefault
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $permissionType
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null $featureSet
 * @property list<Tag>|null $tags
 */
class ResourceSharePermissionSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     version?: string|null,
     *     defaultVersion?: bool|null,
     *     name?: string|null,
     *     resourceType?: string|null,
     *     status?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     isResourceTypeDefault?: bool|null,
     *     permissionType?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
