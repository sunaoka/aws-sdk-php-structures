<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\PutKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Key
 * @property string $Value
 * @property string $KvsARN
 * @property string $IfMatch
 */
class PutKeyRequest extends Request
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string,
     *     KvsARN: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
