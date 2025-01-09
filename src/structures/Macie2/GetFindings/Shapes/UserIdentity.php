<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssumedRole $assumedRole
 * @property AwsAccount $awsAccount
 * @property AwsService $awsService
 * @property FederatedUser $federatedUser
 * @property IamUser $iamUser
 * @property UserIdentityRoot $root
 * @property 'AssumedRole'|'IAMUser'|'FederatedUser'|'Root'|'AWSAccount'|'AWSService' $type
 */
class UserIdentity extends Shape
{
    /**
     * @param array{
     *     assumedRole?: AssumedRole,
     *     awsAccount?: AwsAccount,
     *     awsService?: AwsService,
     *     federatedUser?: FederatedUser,
     *     iamUser?: IamUser,
     *     root?: UserIdentityRoot,
     *     type?: 'AssumedRole'|'IAMUser'|'FederatedUser'|'Root'|'AWSAccount'|'AWSService'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
