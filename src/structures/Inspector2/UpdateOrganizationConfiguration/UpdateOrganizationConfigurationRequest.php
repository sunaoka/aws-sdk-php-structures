<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AutoEnable $autoEnable
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{autoEnable: Shapes\AutoEnable} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
