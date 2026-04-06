<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int|null $ChunksCount
 * @property string|null $MetadataString
 * @property string $ObjectChecksum
 * @property 'SUMMARY' $ObjectChecksumAlgorithm
 * @property string $ObjectToken
 */
class BackupObject extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ChunksCount?: int|null,
     *     MetadataString?: string|null,
     *     ObjectChecksum: string,
     *     ObjectChecksumAlgorithm: 'SUMMARY',
     *     ObjectToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
