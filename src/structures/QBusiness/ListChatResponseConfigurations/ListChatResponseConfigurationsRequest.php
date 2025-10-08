<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListChatResponseConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListChatResponseConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
