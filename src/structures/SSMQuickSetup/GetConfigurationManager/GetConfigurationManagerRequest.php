<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagerArn
 */
class GetConfigurationManagerRequest extends Request
{
    /**
     * @param array{ManagerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
