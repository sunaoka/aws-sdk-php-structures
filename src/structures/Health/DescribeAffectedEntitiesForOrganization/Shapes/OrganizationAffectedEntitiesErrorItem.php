<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $eventArn
 * @property string|null $errorName
 * @property string|null $errorMessage
 */
class OrganizationAffectedEntitiesErrorItem extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     eventArn?: string|null,
     *     errorName?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
