<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $installationId
 * @property string $code
 * @property string $state
 * @property string $siteUrl
 */
class ConfluenceIntegrationInput extends Shape
{
    /**
     * @param array{
     *     installationId: string,
     *     code: string,
     *     state: string,
     *     siteUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
