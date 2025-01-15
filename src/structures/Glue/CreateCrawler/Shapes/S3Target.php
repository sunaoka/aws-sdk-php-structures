<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property list<string>|null $Exclusions
 * @property string|null $ConnectionName
 * @property int|null $SampleSize
 * @property string|null $EventQueueArn
 * @property string|null $DlqEventQueueArn
 */
class S3Target extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     Exclusions?: list<string>|null,
     *     ConnectionName?: string|null,
     *     SampleSize?: int|null,
     *     EventQueueArn?: string|null,
     *     DlqEventQueueArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
