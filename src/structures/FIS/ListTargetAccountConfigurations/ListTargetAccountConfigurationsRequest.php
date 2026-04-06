<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetAccountConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentTemplateId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTargetAccountConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     experimentTemplateId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
