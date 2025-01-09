<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'WARN' $type
 * @property string $message
 * @property list<string> $details
 * @property list<string> $referenceURLs
 */
class MigrationAlert extends Shape
{
    /**
     * @param array{
     *     type?: 'ERROR'|'WARN',
     *     message?: string,
     *     details?: list<string>,
     *     referenceURLs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
