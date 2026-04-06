<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $installationId
 */
class UpdateGitHubIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     installationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
