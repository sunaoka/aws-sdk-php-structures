<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $GameName
 * @property string|null $Role
 * @property string $StageName
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GameName: string,
     *     Role?: string|null,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
