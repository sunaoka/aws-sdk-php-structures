<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $regionName
 * @property string|null $sourceAccountPoolId
 */
class EnvironmentResolvedAccount extends Shape
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     regionName: string,
     *     sourceAccountPoolId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
