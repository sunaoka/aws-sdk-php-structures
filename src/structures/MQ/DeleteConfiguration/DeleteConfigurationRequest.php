<?php

namespace Sunaoka\Aws\Structures\MQ\DeleteConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 */
class DeleteConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
