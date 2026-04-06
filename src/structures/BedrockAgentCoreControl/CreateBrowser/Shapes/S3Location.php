<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $prefix
 * @property string|null $versionId
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     prefix: string,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
