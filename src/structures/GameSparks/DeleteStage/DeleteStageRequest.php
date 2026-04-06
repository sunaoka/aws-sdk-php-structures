<?php

namespace Sunaoka\Aws\Structures\GameSparks\DeleteStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $StageName
 */
class DeleteStageRequest extends Request
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
