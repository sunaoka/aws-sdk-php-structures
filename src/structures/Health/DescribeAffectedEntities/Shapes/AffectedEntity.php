<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityArn
 * @property string|null $eventArn
 * @property string|null $entityValue
 * @property string|null $entityUrl
 * @property string|null $awsAccountId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property 'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'|null $statusCode
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $entityMetadata
 */
class AffectedEntity extends Shape
{
    /**
     * @param array{
     *     entityArn?: string|null,
     *     eventArn?: string|null,
     *     entityValue?: string|null,
     *     entityUrl?: string|null,
     *     awsAccountId?: string|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     statusCode?: 'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'|null,
     *     tags?: array<string, string>|null,
     *     entityMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
