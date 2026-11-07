<?php

namespace Sunaoka\Aws\Structures\RAM\PromotePermissionCreatedFromPolicy\Shapes;

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
 * @property list<PermissionTemplateParameter>|null $permissionTemplateParameters
 * @property list<Tag>|null $tags
 * @property 'SELF'|'OTHER-ACCOUNTS'|null $resourceOwner
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
     *     permissionTemplateParameters?: list<PermissionTemplateParameter>|null,
     *     tags?: list<Tag>|null,
     *     resourceOwner?: 'SELF'|'OTHER-ACCOUNTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
