<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProductId
 * @property string|null $ProductName
 * @property string|null $ProvisioningArtifactId
 * @property string|null $ProvisioningArtifactName
 * @property string|null $PathId
 * @property string|null $PathName
 */
class DescribeProvisioningParametersRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId?: string|null,
     *     ProductName?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ProvisioningArtifactName?: string|null,
     *     PathId?: string|null,
     *     PathName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
