<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 * @property string|null $bucketOwnerAccountId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     uri?: string|null,
     *     bucketOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
