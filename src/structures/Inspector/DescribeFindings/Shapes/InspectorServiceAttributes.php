<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $schemaVersion
 * @property string $assessmentRunArn
 * @property string $rulesPackageArn
 */
class InspectorServiceAttributes extends Shape
{
    /**
     * @param array{
     *     schemaVersion: int<0, max>,
     *     assessmentRunArn?: string,
     *     rulesPackageArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
