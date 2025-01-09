<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteRedshiftIdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RedshiftIdcApplicationArn
 */
class DeleteRedshiftIdcApplicationRequest extends Request
{
    /**
     * @param array{RedshiftIdcApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
