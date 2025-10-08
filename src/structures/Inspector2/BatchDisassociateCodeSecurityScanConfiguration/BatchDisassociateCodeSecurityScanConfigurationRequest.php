<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchDisassociateCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DisassociateConfigurationRequest> $disassociateConfigurationRequests
 */
class BatchDisassociateCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{disassociateConfigurationRequests: list<Shapes\DisassociateConfigurationRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
