<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAuthenticationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $AllowedIps
 * @property list<string>|null $BlockedIps
 * @property bool|null $IsDefault
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property int<10, 60>|null $PeriodicSessionDuration
 * @property int<360, 720>|null $MaxSessionDuration
 */
class AuthenticationProfile extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     AllowedIps?: list<string>|null,
     *     BlockedIps?: list<string>|null,
     *     IsDefault?: bool|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     PeriodicSessionDuration?: int<10, 60>|null,
     *     MaxSessionDuration?: int<360, 720>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
