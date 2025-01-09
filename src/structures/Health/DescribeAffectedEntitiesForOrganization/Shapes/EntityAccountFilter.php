<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property string $awsAccountId
 * @property list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'> $statusCodes
 */
class EntityAccountFilter extends Shape
{
    /**
     * @param array{
     *     eventArn: string,
     *     awsAccountId?: string,
     *     statusCodes?: list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
