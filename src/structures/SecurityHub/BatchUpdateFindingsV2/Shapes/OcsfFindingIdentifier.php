<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudAccountUid
 * @property string $FindingInfoUid
 * @property string $MetadataProductUid
 */
class OcsfFindingIdentifier extends Shape
{
    /**
     * @param array{
     *     CloudAccountUid: string,
     *     FindingInfoUid: string,
     *     MetadataProductUid: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
