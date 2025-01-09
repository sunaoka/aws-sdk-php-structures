<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 */
class DescribeDomainRequest extends Request
{
    /**
     * @param array{DomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
