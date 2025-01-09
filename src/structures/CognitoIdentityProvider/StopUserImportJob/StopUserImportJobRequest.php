<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StopUserImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $JobId
 */
class StopUserImportJobRequest extends Request
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
