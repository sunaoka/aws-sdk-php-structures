<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 */
class DeleteDomainConfigurationRequest extends Request
{
    /**
     * @param array{domainConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
