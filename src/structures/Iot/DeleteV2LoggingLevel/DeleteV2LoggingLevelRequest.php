<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteV2LoggingLevel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID' $targetType
 * @property string $targetName
 */
class DeleteV2LoggingLevelRequest extends Request
{
    /**
     * @param array{
     *     targetType: 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID',
     *     targetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
