<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $registry
 * @property list<string>|null $imageTags
 * @property string|null $imageDigest
 * @property \Aws\Api\DateTimeResult|null $pushedAt
 * @property string|null $architecture
 * @property string|null $author
 * @property int<0, max>|null $inUseCount
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property string|null $platform
 */
class Image extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     registry?: string|null,
     *     imageTags?: list<string>|null,
     *     imageDigest?: string|null,
     *     pushedAt?: \Aws\Api\DateTimeResult|null,
     *     architecture?: string|null,
     *     author?: string|null,
     *     inUseCount?: int<0, max>|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
