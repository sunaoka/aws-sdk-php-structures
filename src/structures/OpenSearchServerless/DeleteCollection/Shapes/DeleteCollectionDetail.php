<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|'UPDATE_FAILED'|null $status
 * @property 'ENABLED'|'DISABLED'|null $deletionProtection
 */
class DeleteCollectionDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|'UPDATE_FAILED'|null,
     *     deletionProtection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
