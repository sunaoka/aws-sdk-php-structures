<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Source $source
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT' $scriptType
 */
class UserDataValidationParameters extends Shape
{
    /**
     * @param array{
     *     source?: Source,
     *     scriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
