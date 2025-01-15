<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetRegion
 * @property string|null $Target
 * @property bool $Encrypted
 * @property string|null $CmkArn
 * @property bool|null $CopyTags
 * @property CrossRegionCopyRetainRule|null $RetainRule
 * @property CrossRegionCopyDeprecateRule|null $DeprecateRule
 */
class CrossRegionCopyRule extends Shape
{
    /**
     * @param array{
     *     TargetRegion?: string|null,
     *     Target?: string|null,
     *     Encrypted: bool,
     *     CmkArn?: string|null,
     *     CopyTags?: bool|null,
     *     RetainRule?: CrossRegionCopyRetainRule|null,
     *     DeprecateRule?: CrossRegionCopyDeprecateRule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
