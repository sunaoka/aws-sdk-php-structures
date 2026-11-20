<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property CodeSecurityIntegrationVpcConfiguration|null $vpcConfiguration
 */
class CreateGitHubEnterpriseIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     vpcConfiguration?: CodeSecurityIntegrationVpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
