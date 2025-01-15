<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'WARN'|null $type
 * @property string|null $message
 * @property list<string>|null $details
 * @property list<string>|null $referenceURLs
 */
class MigrationAlert extends Shape
{
    /**
     * @param array{
     *     type?: 'ERROR'|'WARN'|null,
     *     message?: string|null,
     *     details?: list<string>|null,
     *     referenceURLs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
