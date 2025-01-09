<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\PutDeploymentParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $catalog
 * @property string $clientToken
 * @property Shapes\DeploymentParameterInput $deploymentParameter
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property string $productId
 * @property array<string, string> $tags
 */
class PutDeploymentParameterRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     catalog: string,
     *     clientToken?: string,
     *     deploymentParameter: Shapes\DeploymentParameterInput,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     productId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
