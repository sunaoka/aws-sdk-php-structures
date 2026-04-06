<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $validationId
 * @property string|null $name
 * @property 'SSM'|null $appValidationStrategy
 * @property SSMValidationParameters|null $ssmValidationParameters
 */
class AppValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     validationId?: string|null,
     *     name?: string|null,
     *     appValidationStrategy?: 'SSM'|null,
     *     ssmValidationParameters?: SSMValidationParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
