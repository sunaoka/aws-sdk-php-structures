<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogRoleArn
 * @property string $LogGroupName
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     LogRoleArn: string,
     *     LogGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
