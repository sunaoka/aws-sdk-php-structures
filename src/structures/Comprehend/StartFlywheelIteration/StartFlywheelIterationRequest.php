<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartFlywheelIteration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string $ClientRequestToken
 */
class StartFlywheelIterationRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
