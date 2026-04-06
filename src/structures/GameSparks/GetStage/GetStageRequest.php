<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $StageName
 */
class GetStageRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
