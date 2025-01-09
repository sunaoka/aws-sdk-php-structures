<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostName
 * @property 'http'|'https' $Protocol
 */
class RedirectAllRequestsTo extends Shape
{
    /**
     * @param array{
     *     HostName: string,
     *     Protocol?: 'http'|'https'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
