<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $KmsKeyId
 */
class UpdateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     KmsKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
