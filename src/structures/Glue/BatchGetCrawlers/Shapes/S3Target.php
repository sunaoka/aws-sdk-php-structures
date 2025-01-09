<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property list<string> $Exclusions
 * @property string $ConnectionName
 * @property int $SampleSize
 * @property string $EventQueueArn
 * @property string $DlqEventQueueArn
 */
class S3Target extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     Exclusions?: list<string>,
     *     ConnectionName?: string,
     *     SampleSize?: int,
     *     EventQueueArn?: string,
     *     DlqEventQueueArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
