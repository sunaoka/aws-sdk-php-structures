<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $types
 * @property list<SavedObjectIdentifier>|null $objects
 * @property bool|null $includeReferencesDeep
 */
class ExportOptions extends Shape
{
    /**
     * @param array{
     *     types?: list<string>|null,
     *     objects?: list<SavedObjectIdentifier>|null,
     *     includeReferencesDeep?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
