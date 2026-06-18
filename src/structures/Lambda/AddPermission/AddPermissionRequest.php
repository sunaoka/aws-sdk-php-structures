<?php

namespace Sunaoka\Aws\Structures\Lambda\AddPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $StatementId
 * @property string $Action
 * @property string $Principal
 * @property string|null $SourceArn
 * @property 'NONE'|'AWS_IAM'|null $FunctionUrlAuthType
 * @property bool|null $InvokedViaFunctionUrl
 * @property string|null $SourceAccount
 * @property string|null $EventSourceToken
 * @property string|null $Qualifier
 * @property string|null $RevisionId
 * @property string|null $PrincipalOrgID
 */
class AddPermissionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     StatementId: string,
     *     Action: string,
     *     Principal: string,
     *     SourceArn?: string|null,
     *     FunctionUrlAuthType?: 'NONE'|'AWS_IAM'|null,
     *     InvokedViaFunctionUrl?: bool|null,
     *     SourceAccount?: string|null,
     *     EventSourceToken?: string|null,
     *     Qualifier?: string|null,
     *     RevisionId?: string|null,
     *     PrincipalOrgID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
