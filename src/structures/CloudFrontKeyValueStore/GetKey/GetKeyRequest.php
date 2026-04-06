<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\GetKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 * @property string $Key
 */
class GetKeyRequest extends Request
{
    /**
     * @param array{
     *     KvsARN: string,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
