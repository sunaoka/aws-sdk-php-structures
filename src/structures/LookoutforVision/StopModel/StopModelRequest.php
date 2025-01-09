<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StopModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string $ClientToken
 */
class StopModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
