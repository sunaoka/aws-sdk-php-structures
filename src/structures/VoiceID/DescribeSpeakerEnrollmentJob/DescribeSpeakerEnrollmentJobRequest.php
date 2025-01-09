<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeSpeakerEnrollmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $JobId
 */
class DescribeSpeakerEnrollmentJobRequest extends Request
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
