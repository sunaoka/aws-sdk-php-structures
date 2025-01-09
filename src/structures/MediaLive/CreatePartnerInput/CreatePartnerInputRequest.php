<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputId
 * @property string $RequestId
 * @property array<string, string> $Tags
 */
class CreatePartnerInputRequest extends Request
{
    /**
     * @param array{
     *     InputId: string,
     *     RequestId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
