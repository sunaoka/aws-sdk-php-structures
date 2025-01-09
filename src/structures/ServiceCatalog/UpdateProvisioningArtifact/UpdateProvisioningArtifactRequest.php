<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $Name
 * @property string $Description
 * @property bool $Active
 * @property 'DEFAULT'|'DEPRECATED' $Guidance
 */
class UpdateProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     Name?: string,
     *     Description?: string,
     *     Active?: bool,
     *     Guidance?: 'DEFAULT'|'DEPRECATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
