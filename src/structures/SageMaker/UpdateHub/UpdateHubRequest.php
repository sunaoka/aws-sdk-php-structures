<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $HubDescription
 * @property string $HubDisplayName
 * @property list<string> $HubSearchKeywords
 */
class UpdateHubRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubDescription?: string,
     *     HubDisplayName?: string,
     *     HubSearchKeywords?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
