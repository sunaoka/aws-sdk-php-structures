<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyValue
 */
class ApiKeyCredential extends Shape
{
    /**
     * @param array{apiKeyValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
