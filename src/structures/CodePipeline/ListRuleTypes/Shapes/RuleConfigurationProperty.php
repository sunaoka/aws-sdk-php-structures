<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $required
 * @property bool $key
 * @property bool $secret
 * @property bool $queryable
 * @property string $description
 * @property 'String'|'Number'|'Boolean' $type
 */
class RuleConfigurationProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     required: bool,
     *     key: bool,
     *     secret: bool,
     *     queryable?: bool,
     *     description?: string,
     *     type?: 'String'|'Number'|'Boolean'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
