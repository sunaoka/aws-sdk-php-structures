<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnsConfiguration $SnsConfiguration
 * @property string $RoleArn
 */
class AccountSettingsNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     SnsConfiguration?: SnsConfiguration,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
