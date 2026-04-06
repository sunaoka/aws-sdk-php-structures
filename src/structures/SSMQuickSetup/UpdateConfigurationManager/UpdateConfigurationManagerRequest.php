<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $ManagerArn
 * @property string|null $Name
 */
class UpdateConfigurationManagerRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ManagerArn: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
