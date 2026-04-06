<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server|null $server
 * @property string|null $validationId
 * @property string|null $name
 * @property 'USERDATA'|null $serverValidationStrategy
 * @property UserDataValidationParameters|null $userDataValidationParameters
 */
class ServerValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server|null,
     *     validationId?: string|null,
     *     name?: string|null,
     *     serverValidationStrategy?: 'USERDATA'|null,
     *     userDataValidationParameters?: UserDataValidationParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
