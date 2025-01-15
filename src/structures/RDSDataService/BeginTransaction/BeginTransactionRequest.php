<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BeginTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string|null $database
 * @property string|null $schema
 */
class BeginTransactionRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     database?: string|null,
     *     schema?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
