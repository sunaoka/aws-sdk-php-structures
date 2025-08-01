<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property list<string>|null $imageTags
 * @property \Aws\Api\DateTimeResult|null $pushedAt
 * @property string|null $author
 * @property string|null $architecture
 * @property string $imageHash
 * @property string $registry
 * @property string|null $platform
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property int|null $inUseCount
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     repositoryName: string,
     *     imageTags?: list<string>|null,
     *     pushedAt?: \Aws\Api\DateTimeResult|null,
     *     author?: string|null,
     *     architecture?: string|null,
     *     imageHash: string,
     *     registry: string,
     *     platform?: string|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     inUseCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
