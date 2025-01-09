<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivationId
 * @property string $Description
 * @property string $DefaultInstanceName
 * @property string $IamRole
 * @property int<1, 1000> $RegistrationLimit
 * @property int<1, 1000> $RegistrationsCount
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property bool $Expired
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property list<Tag> $Tags
 */
class Activation extends Shape
{
    /**
     * @param array{
     *     ActivationId?: string,
     *     Description?: string,
     *     DefaultInstanceName?: string,
     *     IamRole?: string,
     *     RegistrationLimit?: int<1, 1000>,
     *     RegistrationsCount?: int<1, 1000>,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Expired?: bool,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
