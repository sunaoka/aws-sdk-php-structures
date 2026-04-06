<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableRecordExpirationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 * @property Shapes\TableRecordExpirationConfigurationValue $value
 */
class PutTableRecordExpirationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     tableArn: string,
     *     value: Shapes\TableRecordExpirationConfigurationValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
