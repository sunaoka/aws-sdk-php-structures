<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TLSInspectionConfigurationArn
 * @property string $TLSInspectionConfigurationName
 */
class DescribeTLSInspectionConfigurationRequest extends Request
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
