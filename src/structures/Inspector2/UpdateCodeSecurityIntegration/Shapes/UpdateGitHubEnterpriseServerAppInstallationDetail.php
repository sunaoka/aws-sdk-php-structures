<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $installationId
 * @property string|null $stateToken
 */
class UpdateGitHubEnterpriseServerAppInstallationDetail extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     installationId: string,
     *     stateToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
