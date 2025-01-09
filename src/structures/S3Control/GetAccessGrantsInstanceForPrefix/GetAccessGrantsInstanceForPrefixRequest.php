<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsInstanceForPrefix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $S3Prefix
 */
class GetAccessGrantsInstanceForPrefixRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     S3Prefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
