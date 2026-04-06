<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 */
class GetTableRecordExpirationConfigurationRequest extends Request
{
    /**
     * @param array{tableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
