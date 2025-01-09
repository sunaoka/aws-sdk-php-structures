<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $schemaVersion
 * @property string $assessmentRunArn
 * @property string $rulesPackageArn
 */
class InspectorServiceAttributes extends Shape
{
    /**
     * @param array{
     *     schemaVersion: int,
     *     assessmentRunArn?: string,
     *     rulesPackageArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
