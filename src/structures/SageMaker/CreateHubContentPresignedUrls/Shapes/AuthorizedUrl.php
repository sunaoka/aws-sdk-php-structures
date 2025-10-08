<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentPresignedUrls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $LocalPath
 */
class AuthorizedUrl extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     LocalPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
