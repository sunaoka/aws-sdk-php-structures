<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string|null $ActiveModelArn
 * @property string|null $DataAccessRoleArn
 * @property Shapes\UpdateDataSecurityConfig|null $DataSecurityConfig
 */
class UpdateFlywheelRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     ActiveModelArn?: string|null,
     *     DataAccessRoleArn?: string|null,
     *     DataSecurityConfig?: Shapes\UpdateDataSecurityConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
