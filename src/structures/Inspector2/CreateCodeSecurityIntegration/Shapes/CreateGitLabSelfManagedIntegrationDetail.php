<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property string $accessToken
 */
class CreateGitLabSelfManagedIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     accessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
