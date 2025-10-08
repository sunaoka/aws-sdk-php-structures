<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentPresignedUrls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AcceptEula
 * @property string|null $ExpectedS3Url
 */
class PresignedUrlAccessConfig extends Shape
{
    /**
     * @param array{
     *     AcceptEula?: bool|null,
     *     ExpectedS3Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
