<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetAccountConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentTemplateId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListTargetAccountConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     experimentTemplateId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
