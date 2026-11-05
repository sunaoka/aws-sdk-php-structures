<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTableSource|null $glueTable
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{glueTable?: GlueTableSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
