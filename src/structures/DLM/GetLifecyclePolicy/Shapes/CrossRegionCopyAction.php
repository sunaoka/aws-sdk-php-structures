<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Target
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property CrossRegionCopyRetainRule $RetainRule
 */
class CrossRegionCopyAction extends Shape
{
    /**
     * @param array{
     *     Target: string,
     *     EncryptionConfiguration: EncryptionConfiguration,
     *     RetainRule?: CrossRegionCopyRetainRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
