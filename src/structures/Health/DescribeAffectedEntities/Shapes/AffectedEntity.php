<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityArn
 * @property string $eventArn
 * @property string $entityValue
 * @property string $entityUrl
 * @property string $awsAccountId
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED' $statusCode
 * @property array<string, string> $tags
 * @property array<string, string> $entityMetadata
 */
class AffectedEntity extends Shape
{
    /**
     * @param array{
     *     entityArn?: string,
     *     eventArn?: string,
     *     entityValue?: string,
     *     entityUrl?: string,
     *     awsAccountId?: string,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     statusCode?: 'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED',
     *     tags?: array<string, string>,
     *     entityMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
