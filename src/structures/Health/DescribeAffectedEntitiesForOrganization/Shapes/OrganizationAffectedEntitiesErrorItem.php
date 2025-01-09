<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $eventArn
 * @property string $errorName
 * @property string $errorMessage
 */
class OrganizationAffectedEntitiesErrorItem extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     eventArn?: string,
     *     errorName?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
