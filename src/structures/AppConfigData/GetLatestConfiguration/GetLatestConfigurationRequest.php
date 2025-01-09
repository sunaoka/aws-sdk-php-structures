<?php

namespace Sunaoka\Aws\Structures\AppConfigData\GetLatestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationToken
 */
class GetLatestConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
