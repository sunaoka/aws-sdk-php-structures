<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 */
class DeleteCollectionRequest extends Request
{
    /**
     * @param array{CollectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
