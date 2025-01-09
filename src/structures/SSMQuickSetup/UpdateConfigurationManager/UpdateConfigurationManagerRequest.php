<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $ManagerArn
 * @property string $Name
 */
class UpdateConfigurationManagerRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     ManagerArn: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
