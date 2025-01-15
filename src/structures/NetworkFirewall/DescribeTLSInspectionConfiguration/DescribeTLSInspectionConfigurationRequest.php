<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TLSInspectionConfigurationArn
 * @property string|null $TLSInspectionConfigurationName
 */
class DescribeTLSInspectionConfigurationRequest extends Request
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
