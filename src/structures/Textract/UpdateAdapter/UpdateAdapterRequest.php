<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property string $Description
 * @property string $AdapterName
 * @property 'ENABLED'|'DISABLED' $AutoUpdate
 */
class UpdateAdapterRequest extends Request
{
    /**
     * @param array{
     *     AdapterId: string,
     *     Description?: string,
     *     AdapterName?: string,
     *     AutoUpdate?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
