<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $FunctionArn
 * @property 'EVENT'|'REQUEST_RESPONSE' $InvocationType
 * @property string $RoleArn
 * @property int<0, 2160>|null $RetryTimeMinutes
 */
class InvokeLambdaAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     FunctionArn: string,
     *     InvocationType: 'EVENT'|'REQUEST_RESPONSE',
     *     RoleArn: string,
     *     RetryTimeMinutes?: int<0, 2160>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
