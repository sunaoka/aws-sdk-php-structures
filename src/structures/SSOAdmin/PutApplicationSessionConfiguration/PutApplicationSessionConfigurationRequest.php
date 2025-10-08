<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationSessionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'ENABLED'|'DISABLED'|null $UserBackgroundSessionApplicationStatus
 */
class PutApplicationSessionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     UserBackgroundSessionApplicationStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
