<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSMOutput|null $ssmOutput
 */
class AppValidationOutput extends Shape
{
    /**
     * @param array{ssmOutput?: SSMOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
