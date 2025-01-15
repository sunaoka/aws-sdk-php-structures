<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchDisassociateServiceActionFromProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ServiceActionAssociation> $ServiceActionAssociations
 * @property string|null $AcceptLanguage
 */
class BatchDisassociateServiceActionFromProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     ServiceActionAssociations: list<Shapes\ServiceActionAssociation>,
     *     AcceptLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
