<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID'|null $targetType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListV2LoggingLevelsRequest extends Request
{
    /**
     * @param array{
     *     targetType?: 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
