<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testTemplateArn
 * @property string $name
 * @property string|null $description
 * @property list<TestTemplateParameter>|null $parameters
 * @property list<TestAction>|null $actions
 */
class TestTemplate extends Shape
{
    /**
     * @param array{
     *     testTemplateArn: string,
     *     name: string,
     *     description?: string|null,
     *     parameters?: list<TestTemplateParameter>|null,
     *     actions?: list<TestAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
