<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property string|null $Description
 * @property string|null $AdapterName
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 */
class UpdateAdapterRequest extends Request
{
    /**
     * @param array{
     *     AdapterId: string,
     *     Description?: string|null,
     *     AdapterName?: string|null,
     *     AutoUpdate?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
