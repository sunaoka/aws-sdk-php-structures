<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $description
 * @property Shapes\VectorOptions|null $vectorOptions
 * @property 'ENABLED'|'DISABLED'|null $deletionProtection
 * @property string|null $clientToken
 */
class UpdateCollectionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     description?: string|null,
     *     vectorOptions?: Shapes\VectorOptions|null,
     *     deletionProtection?: 'ENABLED'|'DISABLED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
