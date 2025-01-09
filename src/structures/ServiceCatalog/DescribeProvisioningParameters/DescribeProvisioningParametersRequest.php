<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $ProductName
 * @property string $ProvisioningArtifactId
 * @property string $ProvisioningArtifactName
 * @property string $PathId
 * @property string $PathName
 */
class DescribeProvisioningParametersRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId?: string,
     *     ProductName?: string,
     *     ProvisioningArtifactId?: string,
     *     ProvisioningArtifactName?: string,
     *     PathId?: string,
     *     PathName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
