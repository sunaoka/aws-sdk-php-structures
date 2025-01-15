<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $Description
 * @property string|null $StageName
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     Description?: string|null,
     *     StageName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
