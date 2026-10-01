<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 * @property string|null $bucketOwnerAccountId
 */
class S3CertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     uri: string,
     *     bucketOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
