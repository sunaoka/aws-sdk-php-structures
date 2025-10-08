<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OcsfFindingIdentifier|null $FindingIdentifier
 * @property string|null $MetadataUid
 */
class BatchUpdateFindingsV2ProcessedFinding extends Shape
{
    /**
     * @param array{
     *     FindingIdentifier?: OcsfFindingIdentifier|null,
     *     MetadataUid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
