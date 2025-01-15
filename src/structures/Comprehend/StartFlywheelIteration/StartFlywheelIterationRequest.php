<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartFlywheelIteration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string|null $ClientRequestToken
 */
class StartFlywheelIterationRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
