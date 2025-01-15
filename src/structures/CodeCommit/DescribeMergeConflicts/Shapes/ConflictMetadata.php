<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filePath
 * @property FileSizes|null $fileSizes
 * @property FileModes|null $fileModes
 * @property ObjectTypes|null $objectTypes
 * @property int|null $numberOfConflicts
 * @property IsBinaryFile|null $isBinaryFile
 * @property bool|null $contentConflict
 * @property bool|null $fileModeConflict
 * @property bool|null $objectTypeConflict
 * @property MergeOperations|null $mergeOperations
 */
class ConflictMetadata extends Shape
{
    /**
     * @param array{
     *     filePath?: string|null,
     *     fileSizes?: FileSizes|null,
     *     fileModes?: FileModes|null,
     *     objectTypes?: ObjectTypes|null,
     *     numberOfConflicts?: int|null,
     *     isBinaryFile?: IsBinaryFile|null,
     *     contentConflict?: bool|null,
     *     fileModeConflict?: bool|null,
     *     objectTypeConflict?: bool|null,
     *     mergeOperations?: MergeOperations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
