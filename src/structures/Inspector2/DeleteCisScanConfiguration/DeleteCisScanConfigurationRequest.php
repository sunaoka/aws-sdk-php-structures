<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCisScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 */
class DeleteCisScanConfigurationRequest extends Request
{
    /**
     * @param array{scanConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
