<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property string|null $dbParameterGroupIdentifier
 */
class UpdateDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     dbParameterGroupIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
