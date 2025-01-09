<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetRegion
 * @property string $Target
 * @property bool $Encrypted
 * @property string $CmkArn
 * @property bool $CopyTags
 * @property CrossRegionCopyRetainRule $RetainRule
 * @property CrossRegionCopyDeprecateRule $DeprecateRule
 */
class CrossRegionCopyRule extends Shape
{
    /**
     * @param array{
     *     TargetRegion?: string,
     *     Target?: string,
     *     Encrypted: bool,
     *     CmkArn?: string,
     *     CopyTags?: bool,
     *     RetainRule?: CrossRegionCopyRetainRule,
     *     DeprecateRule?: CrossRegionCopyDeprecateRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
