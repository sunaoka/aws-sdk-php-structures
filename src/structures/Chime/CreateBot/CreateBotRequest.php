<?php

namespace Sunaoka\Aws\Structures\Chime\CreateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $DisplayName
 * @property string $Domain
 */
class CreateBotRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     DisplayName: string,
     *     Domain?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
