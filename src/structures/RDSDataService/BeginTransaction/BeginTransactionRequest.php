<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BeginTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $database
 * @property string $schema
 */
class BeginTransactionRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     database?: string,
     *     schema?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
