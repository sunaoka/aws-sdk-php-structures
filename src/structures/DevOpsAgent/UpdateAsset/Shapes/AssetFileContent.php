<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property AssetFileBody $body
 * @property Document|null $metadata
 */
class AssetFileContent extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     body: AssetFileBody,
     *     metadata?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
