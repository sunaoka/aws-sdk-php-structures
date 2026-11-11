<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueFunctionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserDefinedFunctionArn
 * @property Shapes\AuditContext|null $AuditContext
 */
class GetTemporaryGlueFunctionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     UserDefinedFunctionArn: string,
     *     AuditContext?: Shapes\AuditContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
