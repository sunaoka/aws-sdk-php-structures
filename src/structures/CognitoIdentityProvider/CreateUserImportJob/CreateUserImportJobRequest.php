<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $UserPoolId
 * @property string $CloudWatchLogsRoleArn
 */
class CreateUserImportJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     UserPoolId: string,
     *     CloudWatchLogsRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
