<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $architecture
 * @property string|null $author
 * @property string|null $imageHash
 * @property list<string>|null $imageTags
 * @property string|null $platform
 * @property \Aws\Api\DateTimeResult|null $pushedAt
 * @property string|null $registry
 * @property string|null $repositoryName
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     architecture?: string|null,
     *     author?: string|null,
     *     imageHash?: string|null,
     *     imageTags?: list<string>|null,
     *     platform?: string|null,
     *     pushedAt?: \Aws\Api\DateTimeResult|null,
     *     registry?: string|null,
     *     repositoryName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
