<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $architecture
 * @property string|null $author
 * @property string $imageHash
 * @property list<string>|null $imageTags
 * @property int|null $inUseCount
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property string|null $platform
 * @property \Aws\Api\DateTimeResult|null $pushedAt
 * @property string $registry
 * @property string $repositoryName
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     architecture?: string|null,
     *     author?: string|null,
     *     imageHash: string,
     *     imageTags?: list<string>|null,
     *     inUseCount?: int|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null,
     *     pushedAt?: \Aws\Api\DateTimeResult|null,
     *     registry: string,
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
