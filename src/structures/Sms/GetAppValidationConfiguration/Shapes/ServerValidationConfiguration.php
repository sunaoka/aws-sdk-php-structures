<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server $server
 * @property string $validationId
 * @property string $name
 * @property 'USERDATA' $serverValidationStrategy
 * @property UserDataValidationParameters $userDataValidationParameters
 */
class ServerValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server,
     *     validationId?: string,
     *     name?: string,
     *     serverValidationStrategy?: 'USERDATA',
     *     userDataValidationParameters?: UserDataValidationParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
