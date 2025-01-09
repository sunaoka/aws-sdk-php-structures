<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP' $ActionFailurePolicy
 * @property string $ApplicationId
 * @property string $IndexId
 * @property string $RoleArn
 */
class DeliverToQBusinessAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP',
     *     ApplicationId: string,
     *     IndexId: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
