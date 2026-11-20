<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGitHubEnterpriseServerAppInstallationDetail|null $appInstallation
 * @property GitHubEnterpriseServerAppRegistrationDetail|null $appRegistration
 */
class UpdateGitHubEnterpriseServerIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     appInstallation?: UpdateGitHubEnterpriseServerAppInstallationDetail|null,
     *     appRegistration?: GitHubEnterpriseServerAppRegistrationDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
