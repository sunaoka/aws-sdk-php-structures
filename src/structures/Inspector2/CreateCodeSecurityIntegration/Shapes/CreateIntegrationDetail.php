<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateGitLabSelfManagedIntegrationDetail|null $gitlabSelfManaged
 */
class CreateIntegrationDetail extends Shape
{
    /**
     * @param array{gitlabSelfManaged?: CreateGitLabSelfManagedIntegrationDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
