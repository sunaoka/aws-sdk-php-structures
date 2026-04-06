<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OcsfFindingIdentifier|null $FindingIdentifier
 * @property string|null $MetadataUid
 * @property 'ResourceNotFoundException'|'ValidationException'|'InternalServerException'|'ConflictException'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class BatchUpdateFindingsV2UnprocessedFinding extends Shape
{
    /**
     * @param array{
     *     FindingIdentifier?: OcsfFindingIdentifier|null,
     *     MetadataUid?: string|null,
     *     ErrorCode?: 'ResourceNotFoundException'|'ValidationException'|'InternalServerException'|'ConflictException'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
