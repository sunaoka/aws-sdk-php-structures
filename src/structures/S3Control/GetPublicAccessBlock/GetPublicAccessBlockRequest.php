<?php

namespace Sunaoka\Aws\Structures\S3Control\GetPublicAccessBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class GetPublicAccessBlockRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
