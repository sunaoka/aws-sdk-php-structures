<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class SpaceSummary extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     arn: string,
     *     name: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
