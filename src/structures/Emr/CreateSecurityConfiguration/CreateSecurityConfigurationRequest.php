<?php

namespace Sunaoka\Aws\Structures\Emr\CreateSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SecurityConfiguration
 */
class CreateSecurityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SecurityConfiguration: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
