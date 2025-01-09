<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 */
class DescribeModelCardRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     ModelCardVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
