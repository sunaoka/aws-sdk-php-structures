<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID' $targetType
 * @property string|null $targetName
 */
class LogTarget extends Shape
{
    /**
     * @param array{
     *     targetType: 'DEFAULT'|'THING_GROUP'|'CLIENT_ID'|'SOURCE_IP'|'PRINCIPAL_ID',
     *     targetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
