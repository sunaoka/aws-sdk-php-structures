<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationArn
 * @property Shapes\UpdateIntegrationDetails $details
 */
class UpdateCodeSecurityIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationArn: string,
     *     details: Shapes\UpdateIntegrationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
