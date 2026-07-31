<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResolvedTestRunTargetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $targetName
 * @property array<string, string> $targetInformation
 */
class ResolvedTargetResource extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     targetName: string,
     *     targetInformation: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
