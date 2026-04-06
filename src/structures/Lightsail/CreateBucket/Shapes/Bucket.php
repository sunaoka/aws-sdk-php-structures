<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property AccessRules|null $accessRules
 * @property string|null $arn
 * @property string|null $bundleId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $url
 * @property ResourceLocation|null $location
 * @property string|null $name
 * @property string|null $supportCode
 * @property list<Tag>|null $tags
 * @property string|null $objectVersioning
 * @property bool|null $ableToUpdateBundle
 * @property list<string>|null $readonlyAccessAccounts
 * @property list<ResourceReceivingAccess>|null $resourcesReceivingAccess
 * @property BucketState|null $state
 * @property BucketAccessLogConfig|null $accessLogConfig
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     accessRules?: AccessRules|null,
     *     arn?: string|null,
     *     bundleId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     url?: string|null,
     *     location?: ResourceLocation|null,
     *     name?: string|null,
     *     supportCode?: string|null,
     *     tags?: list<Tag>|null,
     *     objectVersioning?: string|null,
     *     ableToUpdateBundle?: bool|null,
     *     readonlyAccessAccounts?: list<string>|null,
     *     resourcesReceivingAccess?: list<ResourceReceivingAccess>|null,
     *     state?: BucketState|null,
     *     accessLogConfig?: BucketAccessLogConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
