<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $architecture
 * @property string $author
 * @property string $imageHash
 * @property list<string> $imageTags
 * @property string $platform
 * @property \Aws\Api\DateTimeResult $pushedAt
 * @property string $registry
 * @property string $repositoryName
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     architecture?: string,
     *     author?: string,
     *     imageHash?: string,
     *     imageTags?: list<string>,
     *     platform?: string,
     *     pushedAt?: \Aws\Api\DateTimeResult,
     *     registry?: string,
     *     repositoryName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
