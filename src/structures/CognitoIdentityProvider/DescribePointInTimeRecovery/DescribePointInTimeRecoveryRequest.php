<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribePointInTimeRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RestoreId
 */
class DescribePointInTimeRecoveryRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RestoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
