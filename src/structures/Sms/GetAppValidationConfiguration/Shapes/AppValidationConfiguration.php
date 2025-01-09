<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $validationId
 * @property string $name
 * @property 'SSM' $appValidationStrategy
 * @property SSMValidationParameters $ssmValidationParameters
 */
class AppValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     validationId?: string,
     *     name?: string,
     *     appValidationStrategy?: 'SSM',
     *     ssmValidationParameters?: SSMValidationParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
