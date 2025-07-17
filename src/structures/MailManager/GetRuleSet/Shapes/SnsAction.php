<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $TopicArn
 * @property string $RoleArn
 * @property 'UTF-8'|'BASE64'|null $Encoding
 * @property 'HEADERS'|'CONTENT'|null $PayloadType
 */
class SnsAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     TopicArn: string,
     *     RoleArn: string,
     *     Encoding?: 'UTF-8'|'BASE64'|null,
     *     PayloadType?: 'HEADERS'|'CONTENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
