<?php

namespace Sunaoka\Aws\Structures\Lambda\AddPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $StatementId
 * @property string $Action
 * @property string $Principal
 * @property string $SourceArn
 * @property string $SourceAccount
 * @property string $EventSourceToken
 * @property string $Qualifier
 * @property string $RevisionId
 * @property string $PrincipalOrgID
 * @property 'NONE'|'AWS_IAM' $FunctionUrlAuthType
 */
class AddPermissionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     StatementId: string,
     *     Action: string,
     *     Principal: string,
     *     SourceArn?: string,
     *     SourceAccount?: string,
     *     EventSourceToken?: string,
     *     Qualifier?: string,
     *     RevisionId?: string,
     *     PrincipalOrgID?: string,
     *     FunctionUrlAuthType?: 'NONE'|'AWS_IAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
