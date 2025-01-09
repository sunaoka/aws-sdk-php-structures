<?php

namespace Sunaoka\Aws\Structures\VoiceID\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{DomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
