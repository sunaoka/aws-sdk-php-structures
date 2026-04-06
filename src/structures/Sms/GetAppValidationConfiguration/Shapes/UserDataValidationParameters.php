<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Source|null $source
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null $scriptType
 */
class UserDataValidationParameters extends Shape
{
    /**
     * @param array{
     *     source?: Source|null,
     *     scriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
