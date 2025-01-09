<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $Description
 * @property string $StageName
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     Description?: string,
     *     StageName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
