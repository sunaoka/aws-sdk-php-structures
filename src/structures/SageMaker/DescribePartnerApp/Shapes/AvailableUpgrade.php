<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property list<string>|null $ReleaseNotes
 */
class AvailableUpgrade extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     ReleaseNotes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
