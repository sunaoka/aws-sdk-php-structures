<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\PutDeploymentParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $catalog
 * @property string|null $clientToken
 * @property Shapes\DeploymentParameterInput $deploymentParameter
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property string $productId
 * @property array<string, string>|null $tags
 */
class PutDeploymentParameterRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     catalog: string,
     *     clientToken?: string|null,
     *     deploymentParameter: Shapes\DeploymentParameterInput,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     productId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
