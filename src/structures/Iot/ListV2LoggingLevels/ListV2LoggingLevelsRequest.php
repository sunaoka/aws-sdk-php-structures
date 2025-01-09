<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID' $targetType
 * @property string $nextToken
 * @property int $maxResults
 */
class ListV2LoggingLevelsRequest extends Request
{
    /**
     * @param array{
     *     targetType?: 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
