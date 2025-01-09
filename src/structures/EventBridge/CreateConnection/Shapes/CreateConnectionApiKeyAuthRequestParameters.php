<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiKeyName
 * @property string $ApiKeyValue
 */
class CreateConnectionApiKeyAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     ApiKeyName: string,
     *     ApiKeyValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
