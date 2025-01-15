<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $owner
 * @property string|null $arn
 * @property 'Active'|'Deleted'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property string|null $encryptionKey
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     owner?: string|null,
     *     arn?: string|null,
     *     status?: 'Active'|'Deleted'|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     encryptionKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
