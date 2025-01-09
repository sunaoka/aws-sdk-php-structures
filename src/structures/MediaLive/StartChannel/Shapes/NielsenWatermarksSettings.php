<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NielsenCBET $NielsenCbetSettings
 * @property 'FINAL_DISTRIBUTOR'|'PROGRAM_CONTENT' $NielsenDistributionType
 * @property NielsenNaesIiNw $NielsenNaesIiNwSettings
 */
class NielsenWatermarksSettings extends Shape
{
    /**
     * @param array{
     *     NielsenCbetSettings?: NielsenCBET,
     *     NielsenDistributionType?: 'FINAL_DISTRIBUTOR'|'PROGRAM_CONTENT',
     *     NielsenNaesIiNwSettings?: NielsenNaesIiNw
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
