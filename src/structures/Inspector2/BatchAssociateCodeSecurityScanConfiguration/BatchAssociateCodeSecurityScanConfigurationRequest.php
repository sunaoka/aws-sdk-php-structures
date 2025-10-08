<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchAssociateCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssociateConfigurationRequest> $associateConfigurationRequests
 */
class BatchAssociateCodeSecurityScanConfigurationRequest extends Request
{
    /**
     * @param array{associateConfigurationRequests: list<Shapes\AssociateConfigurationRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
