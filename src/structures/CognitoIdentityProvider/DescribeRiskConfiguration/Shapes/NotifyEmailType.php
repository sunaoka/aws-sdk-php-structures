<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subject
 * @property string $HtmlBody
 * @property string $TextBody
 */
class NotifyEmailType extends Shape
{
    /**
     * @param array{
     *     Subject: string,
     *     HtmlBody?: string,
     *     TextBody?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
