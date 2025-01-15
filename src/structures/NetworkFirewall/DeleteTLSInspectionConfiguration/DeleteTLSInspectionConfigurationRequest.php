<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TLSInspectionConfigurationArn
 * @property string|null $TLSInspectionConfigurationName
 */
class DeleteTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn?: string|null,
     *     TLSInspectionConfigurationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
