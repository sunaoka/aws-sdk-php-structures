<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\DeleteConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagerArn
 */
class DeleteConfigurationManagerRequest extends Request
{
    /**
     * @param array{ManagerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
