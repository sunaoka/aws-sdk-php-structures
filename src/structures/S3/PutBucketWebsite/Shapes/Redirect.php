<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostName
 * @property string $HttpRedirectCode
 * @property 'http'|'https' $Protocol
 * @property string $ReplaceKeyPrefixWith
 * @property string $ReplaceKeyWith
 */
class Redirect extends Shape
{
    /**
     * @param array{
     *     HostName?: string,
     *     HttpRedirectCode?: string,
     *     Protocol?: 'http'|'https',
     *     ReplaceKeyPrefixWith?: string,
     *     ReplaceKeyWith?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
