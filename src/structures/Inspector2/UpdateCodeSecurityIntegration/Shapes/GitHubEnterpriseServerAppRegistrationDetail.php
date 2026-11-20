<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $manifestCode
 */
class GitHubEnterpriseServerAppRegistrationDetail extends Shape
{
    /**
     * @param array{manifestCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
