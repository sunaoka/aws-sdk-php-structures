<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $Active
 * @property 'DEFAULT'|'DEPRECATED'|null $Guidance
 */
class UpdateProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Active?: bool|null,
     *     Guidance?: 'DEFAULT'|'DEPRECATED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
