<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $state
 * @property string $organizationName
 */
class AzureDevOpsIntegrationInput extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     state: string,
     *     organizationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
