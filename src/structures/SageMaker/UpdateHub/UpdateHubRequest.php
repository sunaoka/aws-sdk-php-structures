<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string|null $HubDescription
 * @property string|null $HubDisplayName
 * @property list<string>|null $HubSearchKeywords
 */
class UpdateHubRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubDescription?: string|null,
     *     HubDisplayName?: string|null,
     *     HubSearchKeywords?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
