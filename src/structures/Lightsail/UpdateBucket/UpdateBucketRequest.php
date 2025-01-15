<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property Shapes\AccessRules|null $accessRules
 * @property string|null $versioning
 * @property list<string>|null $readonlyAccessAccounts
 * @property Shapes\BucketAccessLogConfig|null $accessLogConfig
 */
class UpdateBucketRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     accessRules?: Shapes\AccessRules|null,
     *     versioning?: string|null,
     *     readonlyAccessAccounts?: list<string>|null,
     *     accessLogConfig?: Shapes\BucketAccessLogConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
