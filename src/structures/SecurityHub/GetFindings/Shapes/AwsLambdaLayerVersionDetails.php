<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Version
 * @property list<string> $CompatibleRuntimes
 * @property string $CreatedDate
 */
class AwsLambdaLayerVersionDetails extends Shape
{
    /**
     * @param array{
     *     Version?: int,
     *     CompatibleRuntimes?: list<string>,
     *     CreatedDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
