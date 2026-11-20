<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\PutDeploymentParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $productId
 * @property string $agreementId
 * @property Shapes\DeploymentParameterInput $deploymentParameter
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property string|null $clientToken
 */
class PutDeploymentParameterRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     productId: string,
     *     agreementId: string,
     *     deploymentParameter: Shapes\DeploymentParameterInput,
     *     tags?: array<string, string>|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
