<?php

namespace Sunaoka\Aws\Structures\GameSparks\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $GameName
 * @property string $Role
 * @property string $StageName
 * @property array<string, string>|null $Tags
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     GameName: string,
     *     Role: string,
     *     StageName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
