<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $required
 * @property bool $key
 * @property bool $secret
 * @property bool|null $queryable
 * @property string|null $description
 * @property 'String'|'Number'|'Boolean'|null $type
 */
class RuleConfigurationProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     required: bool,
     *     key: bool,
     *     secret: bool,
     *     queryable?: bool|null,
     *     description?: string|null,
     *     type?: 'String'|'Number'|'Boolean'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
