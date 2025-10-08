<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 */
class GetCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{scanConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
