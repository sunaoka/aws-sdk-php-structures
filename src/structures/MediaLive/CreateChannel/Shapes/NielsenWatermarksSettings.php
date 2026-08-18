<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NielsenCBET|null $NielsenCbetSettings
 * @property 'FINAL_DISTRIBUTOR'|'PROGRAM_CONTENT'|null $NielsenDistributionType
 * @property NielsenNaesIiNw|null $NielsenNaesIiNwSettings
 * @property NielsenNwOnly|null $NielsenNwOnlySettings
 */
class NielsenWatermarksSettings extends Shape
{
    /**
     * @param array{
     *     NielsenCbetSettings?: NielsenCBET|null,
     *     NielsenDistributionType?: 'FINAL_DISTRIBUTOR'|'PROGRAM_CONTENT'|null,
     *     NielsenNaesIiNwSettings?: NielsenNaesIiNw|null,
     *     NielsenNwOnlySettings?: NielsenNwOnly|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
