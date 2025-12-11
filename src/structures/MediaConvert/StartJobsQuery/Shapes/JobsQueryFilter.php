<?php

namespace Sunaoka\Aws\Structures\MediaConvert\StartJobsQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'queue'|'status'|'fileInput'|'jobEngineVersionRequested'|'jobEngineVersionUsed'|'audioCodec'|'videoCodec'|null $Key
 * @property list<string>|null $Values
 */
class JobsQueryFilter extends Shape
{
    /**
     * @param array{
     *     Key?: 'queue'|'status'|'fileInput'|'jobEngineVersionRequested'|'jobEngineVersionUsed'|'audioCodec'|'videoCodec'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
