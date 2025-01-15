<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverGroupId
 * @property list<ServerValidationConfiguration>|null $serverValidationConfigurations
 */
class ServerGroupValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string|null,
     *     serverValidationConfigurations?: list<ServerValidationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
