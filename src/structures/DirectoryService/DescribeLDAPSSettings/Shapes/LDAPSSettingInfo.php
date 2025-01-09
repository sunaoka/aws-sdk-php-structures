<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeLDAPSSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabling'|'Enabled'|'EnableFailed'|'Disabled' $LDAPSStatus
 * @property string $LDAPSStatusReason
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 */
class LDAPSSettingInfo extends Shape
{
    /**
     * @param array{
     *     LDAPSStatus?: 'Enabling'|'Enabled'|'EnableFailed'|'Disabled',
     *     LDAPSStatusReason?: string,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
