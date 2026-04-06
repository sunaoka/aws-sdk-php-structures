<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteIdentityPropagationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'REDSHIFT' $Service
 */
class DeleteIdentityPropagationConfigRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Service: 'REDSHIFT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
