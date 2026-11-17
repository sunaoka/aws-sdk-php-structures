<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $value
 * @property 'ORGANIZATION_RESOURCE_TAG'|'ORGANIZATION_ACCOUNT_TAG'|null $type
 */
class OrganizationTag extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: string|null,
     *     type?: 'ORGANIZATION_RESOURCE_TAG'|'ORGANIZATION_ACCOUNT_TAG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
