<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property 'UTF-8'|'Base64' $Encoding
 */
class SNSAction extends Shape
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Encoding?: 'UTF-8'|'Base64'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
