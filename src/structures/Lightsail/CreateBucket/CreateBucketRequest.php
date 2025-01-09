<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property string $bundleId
 * @property list<Shapes\Tag> $tags
 * @property bool $enableObjectVersioning
 */
class CreateBucketRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     bundleId: string,
     *     tags?: list<Shapes\Tag>,
     *     enableObjectVersioning?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
