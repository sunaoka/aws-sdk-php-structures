<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TLSInspectionConfigurationArn
 * @property string $TLSInspectionConfigurationName
 */
class DeleteTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn?: string,
     *     TLSInspectionConfigurationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
