<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeFraudsterRegistrationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $JobId
 */
class DescribeFraudsterRegistrationJobRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
