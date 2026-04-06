<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 */
class GetConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
