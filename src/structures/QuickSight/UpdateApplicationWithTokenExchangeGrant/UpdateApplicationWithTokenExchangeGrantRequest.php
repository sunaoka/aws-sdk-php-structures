<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateApplicationWithTokenExchangeGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class UpdateApplicationWithTokenExchangeGrantRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
