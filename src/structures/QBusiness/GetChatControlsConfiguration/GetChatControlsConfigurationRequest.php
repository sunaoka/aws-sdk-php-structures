<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class GetChatControlsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
