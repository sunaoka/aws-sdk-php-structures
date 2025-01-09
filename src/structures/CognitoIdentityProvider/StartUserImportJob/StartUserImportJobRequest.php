<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartUserImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $JobId
 */
class StartUserImportJobRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
