<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 */
class DeleteWorkteamRequest extends Request
{
    /**
     * @param array{WorkteamName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
