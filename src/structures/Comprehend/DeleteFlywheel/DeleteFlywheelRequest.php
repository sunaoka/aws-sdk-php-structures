<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 */
class DeleteFlywheelRequest extends Request
{
    /**
     * @param array{FlywheelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
