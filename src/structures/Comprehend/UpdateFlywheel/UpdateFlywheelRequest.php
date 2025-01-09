<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string $ActiveModelArn
 * @property string $DataAccessRoleArn
 * @property Shapes\UpdateDataSecurityConfig $DataSecurityConfig
 */
class UpdateFlywheelRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     ActiveModelArn?: string,
     *     DataAccessRoleArn?: string,
     *     DataSecurityConfig?: Shapes\UpdateDataSecurityConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
