<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property string|null $awsAccountId
 * @property list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>|null $statusCodes
 * @property array<string, list<string>>|null $tags
 */
class EntityAccountFilter extends Shape
{
    /**
     * @param array{
     *     eventArn: string,
     *     awsAccountId?: string|null,
     *     statusCodes?: list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>|null,
     *     tags?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
