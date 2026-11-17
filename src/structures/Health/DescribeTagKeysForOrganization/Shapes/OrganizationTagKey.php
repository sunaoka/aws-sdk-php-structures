<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagKeysForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property bool|null $enabledForEventBridge
 * @property 'PENDING'|'ACTIVE'|null $status
 */
class OrganizationTagKey extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     enabledForEventBridge?: bool|null,
     *     status?: 'PENDING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
