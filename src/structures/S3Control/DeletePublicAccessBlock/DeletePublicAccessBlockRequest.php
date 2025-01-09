<?php

namespace Sunaoka\Aws\Structures\S3Control\DeletePublicAccessBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class DeletePublicAccessBlockRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
