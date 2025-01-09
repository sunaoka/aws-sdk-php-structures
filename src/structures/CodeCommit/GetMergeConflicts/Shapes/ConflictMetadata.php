<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property FileSizes $fileSizes
 * @property FileModes $fileModes
 * @property ObjectTypes $objectTypes
 * @property int $numberOfConflicts
 * @property IsBinaryFile $isBinaryFile
 * @property bool $contentConflict
 * @property bool $fileModeConflict
 * @property bool $objectTypeConflict
 * @property MergeOperations $mergeOperations
 */
class ConflictMetadata extends Shape
{
    /**
     * @param array{
     *     filePath?: string,
     *     fileSizes?: FileSizes,
     *     fileModes?: FileModes,
     *     objectTypes?: ObjectTypes,
     *     numberOfConflicts?: int,
     *     isBinaryFile?: IsBinaryFile,
     *     contentConflict?: bool,
     *     fileModeConflict?: bool,
     *     objectTypeConflict?: bool,
     *     mergeOperations?: MergeOperations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
