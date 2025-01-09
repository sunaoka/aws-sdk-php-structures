<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProviderSchemaAttribute> $providerSchemaAttributes
 * @property list<list<string>> $schemas
 */
class ProviderComponentSchema extends Shape
{
    /**
     * @param array{
     *     providerSchemaAttributes?: list<ProviderSchemaAttribute>,
     *     schemas?: list<list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
