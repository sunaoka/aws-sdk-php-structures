<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerSideEncryptionRule> $Rules
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{Rules: list<ServerSideEncryptionRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
