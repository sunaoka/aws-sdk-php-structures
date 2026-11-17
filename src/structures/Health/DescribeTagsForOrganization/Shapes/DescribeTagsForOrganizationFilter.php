<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ORGANIZATION_RESOURCE_TAG'|'ORGANIZATION_ACCOUNT_TAG'>|null $tagTypes
 */
class DescribeTagsForOrganizationFilter extends Shape
{
    /**
     * @param array{tagTypes?: list<'ORGANIZATION_RESOURCE_TAG'|'ORGANIZATION_ACCOUNT_TAG'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
