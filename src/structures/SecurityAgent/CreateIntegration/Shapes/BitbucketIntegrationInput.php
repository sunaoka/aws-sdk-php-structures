<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $installationId
 * @property string $workspace
 * @property string $code
 * @property string $state
 */
class BitbucketIntegrationInput extends Shape
{
    /**
     * @param array{
     *     installationId: string,
     *     workspace: string,
     *     code: string,
     *     state: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
