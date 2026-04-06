<?php

namespace Sunaoka\Aws\Structures\RAM\UpdateResourceShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceShareArn
 * @property string|null $name
 * @property string|null $owningAccountId
 * @property bool|null $allowExternalPrincipals
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|null $status
 * @property string|null $statusMessage
 * @property list<Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null $featureSet
 * @property ResourceShareConfiguration|null $resourceShareConfiguration
 */
class ResourceShare extends Shape
{
    /**
     * @param array{
     *     resourceShareArn?: string|null,
     *     name?: string|null,
     *     owningAccountId?: string|null,
     *     allowExternalPrincipals?: bool|null,
     *     status?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|null,
     *     statusMessage?: string|null,
     *     tags?: list<Tag>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null,
     *     resourceShareConfiguration?: ResourceShareConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
