<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteIdentityPropagationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'REDSHIFT'|'QBUSINESS'|'ATHENA'|'GLUE_DATA_CATALOG' $Service
 */
class DeleteIdentityPropagationConfigRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Service: 'REDSHIFT'|'QBUSINESS'|'ATHENA'|'GLUE_DATA_CATALOG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
