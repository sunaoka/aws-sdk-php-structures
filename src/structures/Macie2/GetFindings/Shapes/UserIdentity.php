<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssumedRole|null $assumedRole
 * @property AwsAccount|null $awsAccount
 * @property AwsService|null $awsService
 * @property FederatedUser|null $federatedUser
 * @property IamUser|null $iamUser
 * @property UserIdentityRoot|null $root
 * @property 'AssumedRole'|'IAMUser'|'FederatedUser'|'Root'|'AWSAccount'|'AWSService'|null $type
 */
class UserIdentity extends Shape
{
    /**
     * @param array{
     *     assumedRole?: AssumedRole|null,
     *     awsAccount?: AwsAccount|null,
     *     awsService?: AwsService|null,
     *     federatedUser?: FederatedUser|null,
     *     iamUser?: IamUser|null,
     *     root?: UserIdentityRoot|null,
     *     type?: 'AssumedRole'|'IAMUser'|'FederatedUser'|'Root'|'AWSAccount'|'AWSService'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
