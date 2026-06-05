<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageUri
 * @property string|null $resolvedImageDigest
 * @property bool|null $applicationLevelDigestResolution
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{
     *     imageUri: string,
     *     resolvedImageDigest?: string|null,
     *     applicationLevelDigestResolution?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
