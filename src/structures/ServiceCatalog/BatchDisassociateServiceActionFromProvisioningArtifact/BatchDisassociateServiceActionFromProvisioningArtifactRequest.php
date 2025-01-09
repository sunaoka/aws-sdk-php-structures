<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchDisassociateServiceActionFromProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ServiceActionAssociation> $ServiceActionAssociations
 * @property string $AcceptLanguage
 */
class BatchDisassociateServiceActionFromProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     ServiceActionAssociations: list<Shapes\ServiceActionAssociation>,
     *     AcceptLanguage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
