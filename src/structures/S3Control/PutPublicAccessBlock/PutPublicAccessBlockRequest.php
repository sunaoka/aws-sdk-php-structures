<?php

namespace Sunaoka\Aws\Structures\S3Control\PutPublicAccessBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PublicAccessBlockConfiguration $PublicAccessBlockConfiguration
 * @property string $AccountId
 */
class PutPublicAccessBlockRequest extends Request
{
    /**
     * @param array{
     *     PublicAccessBlockConfiguration: Shapes\PublicAccessBlockConfiguration,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
