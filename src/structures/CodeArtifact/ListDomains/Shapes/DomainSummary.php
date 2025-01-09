<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $owner
 * @property string $arn
 * @property 'Active'|'Deleted' $status
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $encryptionKey
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     owner?: string,
     *     arn?: string,
     *     status?: 'Active'|'Deleted',
     *     createdTime?: \Aws\Api\DateTimeResult,
     *     encryptionKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
