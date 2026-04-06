<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authCode
 */
class UpdateGitLabSelfManagedIntegrationDetail extends Shape
{
    /**
     * @param array{authCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
