<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessionLoggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $keyPrefix
 * @property string|null $bucketOwner
 * @property 'JSONLines'|'Json' $logFileFormat
 * @property 'Flat'|'NestedByDate' $folderStructure
 */
class S3LogConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string|null,
     *     bucketOwner?: string|null,
     *     logFileFormat: 'JSONLines'|'Json',
     *     folderStructure: 'Flat'|'NestedByDate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
