<?php

namespace Sunaoka\Aws\Structures\Chime\CreateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $DisplayName
 * @property string|null $Domain
 */
class CreateBotRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     DisplayName: string,
     *     Domain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
