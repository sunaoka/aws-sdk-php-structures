<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property Shapes\AccessRules $accessRules
 * @property string $versioning
 * @property list<string> $readonlyAccessAccounts
 * @property Shapes\BucketAccessLogConfig $accessLogConfig
 */
class UpdateBucketRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     accessRules?: Shapes\AccessRules,
     *     versioning?: string,
     *     readonlyAccessAccounts?: list<string>,
     *     accessLogConfig?: Shapes\BucketAccessLogConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
