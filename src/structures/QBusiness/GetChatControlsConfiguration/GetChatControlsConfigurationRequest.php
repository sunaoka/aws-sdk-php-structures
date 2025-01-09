<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class GetChatControlsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
