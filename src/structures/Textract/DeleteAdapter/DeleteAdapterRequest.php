<?php

namespace Sunaoka\Aws\Structures\Textract\DeleteAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 */
class DeleteAdapterRequest extends Request
{
    /**
     * @param array{AdapterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
