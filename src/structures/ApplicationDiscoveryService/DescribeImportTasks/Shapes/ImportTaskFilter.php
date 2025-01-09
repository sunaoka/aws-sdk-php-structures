<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMPORT_TASK_ID'|'STATUS'|'NAME'|'FILE_CLASSIFICATION' $name
 * @property list<string> $values
 */
class ImportTaskFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'IMPORT_TASK_ID'|'STATUS'|'NAME'|'FILE_CLASSIFICATION',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
