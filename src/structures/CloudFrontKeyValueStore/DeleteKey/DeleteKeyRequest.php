<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 * @property string $Key
 * @property string $IfMatch
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{
     *     KvsARN: string,
     *     Key: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
