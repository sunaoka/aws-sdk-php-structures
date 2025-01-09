<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverGroupId
 * @property list<ServerValidationConfiguration> $serverValidationConfigurations
 */
class ServerGroupValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string,
     *     serverValidationConfigurations?: list<ServerValidationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
