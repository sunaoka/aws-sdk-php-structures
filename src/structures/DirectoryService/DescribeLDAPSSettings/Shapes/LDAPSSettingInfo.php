<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeLDAPSSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabling'|'Enabled'|'EnableFailed'|'Disabled'|null $LDAPSStatus
 * @property string|null $LDAPSStatusReason
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 */
class LDAPSSettingInfo extends Shape
{
    /**
     * @param array{
     *     LDAPSStatus?: 'Enabling'|'Enabled'|'EnableFailed'|'Disabled'|null,
     *     LDAPSStatusReason?: string|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
