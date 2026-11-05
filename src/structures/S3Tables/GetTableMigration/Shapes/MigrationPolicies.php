<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fail'|'drop'|null $unmatchedSourceFieldsPolicy
 * @property 'fail'|'setNull'|null $incompatibleValuesPolicy
 */
class MigrationPolicies extends Shape
{
    /**
     * @param array{
     *     unmatchedSourceFieldsPolicy?: 'fail'|'drop'|null,
     *     incompatibleValuesPolicy?: 'fail'|'setNull'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
