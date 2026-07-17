<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $UserPoolId
 * @property string $CloudWatchLogsRoleArn
 * @property 'BCRYPT'|'SCRYPT'|'ARGON2ID'|'PBKDF2_SHA256'|null $PasswordHashingAlgorithm
 */
class CreateUserImportJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     UserPoolId: string,
     *     CloudWatchLogsRoleArn: string,
     *     PasswordHashingAlgorithm?: 'BCRYPT'|'SCRYPT'|'ARGON2ID'|'PBKDF2_SHA256'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
