<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property AccessRules $accessRules
 * @property string $arn
 * @property string $bundleId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $url
 * @property ResourceLocation $location
 * @property string $name
 * @property string $supportCode
 * @property list<Tag> $tags
 * @property string $objectVersioning
 * @property bool $ableToUpdateBundle
 * @property list<string> $readonlyAccessAccounts
 * @property list<ResourceReceivingAccess> $resourcesReceivingAccess
 * @property BucketState $state
 * @property BucketAccessLogConfig $accessLogConfig
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     accessRules?: AccessRules,
     *     arn?: string,
     *     bundleId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     url?: string,
     *     location?: ResourceLocation,
     *     name?: string,
     *     supportCode?: string,
     *     tags?: list<Tag>,
     *     objectVersioning?: string,
     *     ableToUpdateBundle?: bool,
     *     readonlyAccessAccounts?: list<string>,
     *     resourcesReceivingAccess?: list<ResourceReceivingAccess>,
     *     state?: BucketState,
     *     accessLogConfig?: BucketAccessLogConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
