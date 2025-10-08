<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactPreference>|null $Phone
 * @property list<ContactPreference>|null $Email
 */
class EngagementPreferences extends Shape
{
    /**
     * @param array{
     *     Phone?: list<ContactPreference>|null,
     *     Email?: list<ContactPreference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
