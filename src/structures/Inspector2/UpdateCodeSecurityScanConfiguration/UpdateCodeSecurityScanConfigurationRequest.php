<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 * @property Shapes\CodeSecurityScanConfiguration $configuration
 */
class UpdateCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     configuration: Shapes\CodeSecurityScanConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
