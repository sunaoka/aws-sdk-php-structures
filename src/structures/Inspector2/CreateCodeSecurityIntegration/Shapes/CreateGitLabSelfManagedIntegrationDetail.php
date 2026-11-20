<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property string $accessToken
 * @property CodeSecurityIntegrationVpcConfiguration|null $vpcConfiguration
 */
class CreateGitLabSelfManagedIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     accessToken: string,
     *     vpcConfiguration?: CodeSecurityIntegrationVpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
