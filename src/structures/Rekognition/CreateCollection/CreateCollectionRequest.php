<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property array<string, string> $Tags
 */
class CreateCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
