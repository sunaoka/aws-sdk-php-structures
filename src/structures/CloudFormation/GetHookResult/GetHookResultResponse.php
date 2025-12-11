<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetHookResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HookResultId
 * @property 'PRE_PROVISION'|null $InvocationPoint
 * @property 'FAIL'|'WARN'|null $FailureMode
 * @property string|null $TypeName
 * @property string|null $OriginalTypeName
 * @property string|null $TypeVersionId
 * @property string|null $TypeConfigurationVersionId
 * @property string|null $TypeArn
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $Status
 * @property string|null $HookStatusReason
 * @property \Aws\Api\DateTimeResult|null $InvokedAt
 * @property Shapes\HookTarget|null $Target
 * @property list<Shapes\Annotation>|null $Annotations
 */
class GetHookResultResponse extends Response
{
}
