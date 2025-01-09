<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property int $MinInferenceUnits
 * @property string $ClientToken
 * @property int $MaxInferenceUnits
 */
class StartModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     MinInferenceUnits: int,
     *     ClientToken?: string,
     *     MaxInferenceUnits?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
