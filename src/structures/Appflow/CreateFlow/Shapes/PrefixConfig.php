<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILENAME'|'PATH'|'PATH_AND_FILENAME'|null $prefixType
 * @property 'YEAR'|'MONTH'|'DAY'|'HOUR'|'MINUTE'|null $prefixFormat
 * @property list<'EXECUTION_ID'|'SCHEMA_VERSION'>|null $pathPrefixHierarchy
 */
class PrefixConfig extends Shape
{
    /**
     * @param array{
     *     prefixType?: 'FILENAME'|'PATH'|'PATH_AND_FILENAME'|null,
     *     prefixFormat?: 'YEAR'|'MONTH'|'DAY'|'HOUR'|'MINUTE'|null,
     *     pathPrefixHierarchy?: list<'EXECUTION_ID'|'SCHEMA_VERSION'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
