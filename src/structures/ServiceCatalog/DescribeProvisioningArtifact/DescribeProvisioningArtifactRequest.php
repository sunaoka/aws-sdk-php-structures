<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProvisioningArtifactId
 * @property string|null $ProductId
 * @property string|null $ProvisioningArtifactName
 * @property string|null $ProductName
 * @property bool|null $Verbose
 * @property bool|null $IncludeProvisioningArtifactParameters
 */
class DescribeProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ProductId?: string|null,
     *     ProvisioningArtifactName?: string|null,
     *     ProductName?: string|null,
     *     Verbose?: bool|null,
     *     IncludeProvisioningArtifactParameters?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
