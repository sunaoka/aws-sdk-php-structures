<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Target
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property CrossRegionCopyRetainRule|null $RetainRule
 */
class CrossRegionCopyAction extends Shape
{
    /**
     * @param array{
     *     Target: string,
     *     EncryptionConfiguration: EncryptionConfiguration,
     *     RetainRule?: CrossRegionCopyRetainRule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
