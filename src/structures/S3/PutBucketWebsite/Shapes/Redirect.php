<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostName
 * @property string|null $HttpRedirectCode
 * @property 'http'|'https'|null $Protocol
 * @property string|null $ReplaceKeyPrefixWith
 * @property string|null $ReplaceKeyWith
 */
class Redirect extends Shape
{
    /**
     * @param array{
     *     HostName?: string|null,
     *     HttpRedirectCode?: string|null,
     *     Protocol?: 'http'|'https'|null,
     *     ReplaceKeyPrefixWith?: string|null,
     *     ReplaceKeyWith?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
