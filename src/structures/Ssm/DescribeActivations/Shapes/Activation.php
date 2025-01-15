<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActivationId
 * @property string|null $Description
 * @property string|null $DefaultInstanceName
 * @property string|null $IamRole
 * @property int<1, 1000>|null $RegistrationLimit
 * @property int<1, 1000>|null $RegistrationsCount
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property bool|null $Expired
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property list<Tag>|null $Tags
 */
class Activation extends Shape
{
    /**
     * @param array{
     *     ActivationId?: string|null,
     *     Description?: string|null,
     *     DefaultInstanceName?: string|null,
     *     IamRole?: string|null,
     *     RegistrationLimit?: int<1, 1000>|null,
     *     RegistrationsCount?: int<1, 1000>|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Expired?: bool|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
