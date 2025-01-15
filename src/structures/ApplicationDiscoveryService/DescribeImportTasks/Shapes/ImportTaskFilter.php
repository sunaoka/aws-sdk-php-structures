<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMPORT_TASK_ID'|'STATUS'|'NAME'|'FILE_CLASSIFICATION'|null $name
 * @property list<string>|null $values
 */
class ImportTaskFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'IMPORT_TASK_ID'|'STATUS'|'NAME'|'FILE_CLASSIFICATION'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
