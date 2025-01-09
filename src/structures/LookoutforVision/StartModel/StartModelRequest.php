<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property int<1, max> $MinInferenceUnits
 * @property string $ClientToken
 * @property int<1, max> $MaxInferenceUnits
 */
class StartModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     MinInferenceUnits: int<1, max>,
     *     ClientToken?: string,
     *     MaxInferenceUnits?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
