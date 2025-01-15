<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subject
 * @property string|null $HtmlBody
 * @property string|null $TextBody
 */
class NotifyEmailType extends Shape
{
    /**
     * @param array{
     *     Subject: string,
     *     HtmlBody?: string|null,
     *     TextBody?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
