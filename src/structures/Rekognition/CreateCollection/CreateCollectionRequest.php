<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property array<string, string>|null $Tags
 */
class CreateCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
