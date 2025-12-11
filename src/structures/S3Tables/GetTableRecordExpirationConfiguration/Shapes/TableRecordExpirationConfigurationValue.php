<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $status
 * @property TableRecordExpirationSettings|null $settings
 */
class TableRecordExpirationConfigurationValue extends Shape
{
    /**
     * @param array{
     *     status?: 'enabled'|'disabled'|null,
     *     settings?: TableRecordExpirationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
