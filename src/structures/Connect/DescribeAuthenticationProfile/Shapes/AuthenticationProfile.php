<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAuthenticationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property list<string> $AllowedIps
 * @property list<string> $BlockedIps
 * @property bool $IsDefault
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 * @property int $PeriodicSessionDuration
 * @property int $MaxSessionDuration
 */
class AuthenticationProfile extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Description?: string,
     *     AllowedIps?: list<string>,
     *     BlockedIps?: list<string>,
     *     IsDefault?: bool,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string,
     *     PeriodicSessionDuration?: int,
     *     MaxSessionDuration?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
