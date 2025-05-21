<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property 'UTF-8'|'BASE64'|null $Encoding
 * @property 'HEADERS'|'CONTENT'|null $PayloadType
 * @property string $RoleArn
 * @property string $TopicArn
 */
class SnsAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     Encoding?: 'UTF-8'|'BASE64'|null,
     *     PayloadType?: 'HEADERS'|'CONTENT'|null,
     *     RoleArn: string,
     *     TopicArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
