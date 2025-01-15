<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputId
 * @property string|null $RequestId
 * @property array<string, string>|null $Tags
 */
class CreatePartnerInputRequest extends Request
{
    /**
     * @param array{
     *     InputId: string,
     *     RequestId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
