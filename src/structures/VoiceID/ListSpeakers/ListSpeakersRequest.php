<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSpeakersRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
