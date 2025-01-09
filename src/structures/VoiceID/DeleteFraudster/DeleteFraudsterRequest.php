<?php

namespace Sunaoka\Aws\Structures\VoiceID\DeleteFraudster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $FraudsterId
 */
class DeleteFraudsterRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     FraudsterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
