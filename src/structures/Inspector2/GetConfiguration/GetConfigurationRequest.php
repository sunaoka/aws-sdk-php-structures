<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 */
class GetConfigurationRequest extends Request
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
