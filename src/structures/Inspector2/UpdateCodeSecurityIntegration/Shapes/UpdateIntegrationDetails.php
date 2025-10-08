<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGitLabSelfManagedIntegrationDetail|null $gitlabSelfManaged
 * @property UpdateGitHubIntegrationDetail|null $github
 */
class UpdateIntegrationDetails extends Shape
{
    /**
     * @param array{
     *     gitlabSelfManaged?: UpdateGitLabSelfManagedIntegrationDetail|null,
     *     github?: UpdateGitHubIntegrationDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
