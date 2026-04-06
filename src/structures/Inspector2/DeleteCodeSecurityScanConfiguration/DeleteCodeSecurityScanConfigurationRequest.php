<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 */
class DeleteCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{scanConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
