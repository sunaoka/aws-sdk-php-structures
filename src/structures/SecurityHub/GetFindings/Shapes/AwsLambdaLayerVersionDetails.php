<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Version
 * @property list<string>|null $CompatibleRuntimes
 * @property string|null $CreatedDate
 */
class AwsLambdaLayerVersionDetails extends Shape
{
    /**
     * @param array{
     *     Version?: int|null,
     *     CompatibleRuntimes?: list<string>|null,
     *     CreatedDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
