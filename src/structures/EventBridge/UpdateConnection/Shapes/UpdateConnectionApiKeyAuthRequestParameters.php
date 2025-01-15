<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiKeyName
 * @property string|null $ApiKeyValue
 */
class UpdateConnectionApiKeyAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     ApiKeyName?: string|null,
     *     ApiKeyValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
