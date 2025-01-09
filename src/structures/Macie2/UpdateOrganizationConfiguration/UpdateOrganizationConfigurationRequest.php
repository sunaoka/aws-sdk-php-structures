<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $autoEnable
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{autoEnable: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
