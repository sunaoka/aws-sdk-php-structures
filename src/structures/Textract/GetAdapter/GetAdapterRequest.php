<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 */
class GetAdapterRequest extends Request
{
    /**
     * @param array{AdapterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
