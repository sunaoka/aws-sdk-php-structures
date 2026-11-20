<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property string $vpcEndpointId
 * @property string|null $codeConnectionsHostArn
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroups
 * @property string|null $tlsCertificate
 */
class CodeSecurityIntegrationVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcId: string,
     *     vpcEndpointId: string,
     *     codeConnectionsHostArn?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroups?: list<string>|null,
     *     tlsCertificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
