<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisioningArtifactId
 * @property string $ProductId
 * @property string $ProvisioningArtifactName
 * @property string $ProductName
 * @property bool $Verbose
 * @property bool $IncludeProvisioningArtifactParameters
 */
class DescribeProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisioningArtifactId?: string,
     *     ProductId?: string,
     *     ProvisioningArtifactName?: string,
     *     ProductName?: string,
     *     Verbose?: bool,
     *     IncludeProvisioningArtifactParameters?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
