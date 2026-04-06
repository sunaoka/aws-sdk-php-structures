<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 */
class GetTableRecordExpirationJobStatusRequest extends Request
{
    /**
     * @param array{tableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
