<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authCode
 * @property string|null $stateToken
 */
class UpdateGitLabSelfManagedIntegrationDetail extends Shape
{
    /**
     * @param array{
     *     authCode: string,
     *     stateToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
