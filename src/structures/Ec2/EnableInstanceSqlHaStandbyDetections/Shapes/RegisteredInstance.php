<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableInstanceSqlHaStandbyDetections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property 'full'|'waived'|null $SqlServerLicenseUsage
 * @property 'processing'|'active'|'standby'|'invalid'|null $HaStatus
 * @property string|null $ProcessingStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $SqlServerCredentials
 * @property list<Tag>|null $Tags
 */
class RegisteredInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     SqlServerLicenseUsage?: 'full'|'waived'|null,
     *     HaStatus?: 'processing'|'active'|'standby'|'invalid'|null,
     *     ProcessingStatus?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     SqlServerCredentials?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
