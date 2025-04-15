<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<string>>|null $schemas
 * @property list<ProviderSchemaAttribute>|null $providerSchemaAttributes
 */
class ProviderComponentSchema extends Shape
{
    /**
     * @param array{
     *     schemas?: list<list<string>>|null,
     *     providerSchemaAttributes?: list<ProviderSchemaAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
