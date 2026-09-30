<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetUrl
 * @property string $code
 * @property string $state
 */
class BitbucketDataCenterIntegrationInput extends Shape
{
    /**
     * @param array{
     *     targetUrl: string,
     *     code: string,
     *     state: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
