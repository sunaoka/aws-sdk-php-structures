<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProviderSchemaAttribute>|null $providerSchemaAttributes
 * @property list<list<string>>|null $schemas
 */
class ProviderComponentSchema extends Shape
{
    /**
     * @param array{
     *     providerSchemaAttributes?: list<ProviderSchemaAttribute>|null,
     *     schemas?: list<list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
