<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILENAME'|'PATH'|'PATH_AND_FILENAME' $prefixType
 * @property 'YEAR'|'MONTH'|'DAY'|'HOUR'|'MINUTE' $prefixFormat
 * @property list<'EXECUTION_ID'|'SCHEMA_VERSION'> $pathPrefixHierarchy
 */
class PrefixConfig extends Shape
{
    /**
     * @param array{
     *     prefixType?: 'FILENAME'|'PATH'|'PATH_AND_FILENAME',
     *     prefixFormat?: 'YEAR'|'MONTH'|'DAY'|'HOUR'|'MINUTE',
     *     pathPrefixHierarchy?: list<'EXECUTION_ID'|'SCHEMA_VERSION'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
