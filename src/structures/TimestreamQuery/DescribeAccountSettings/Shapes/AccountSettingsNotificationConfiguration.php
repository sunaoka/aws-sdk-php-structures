<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnsConfiguration|null $SnsConfiguration
 * @property string $RoleArn
 */
class AccountSettingsNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     SnsConfiguration?: SnsConfiguration|null,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
