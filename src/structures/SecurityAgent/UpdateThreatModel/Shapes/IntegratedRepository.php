<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreatModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $providerResourceId
 * @property string|null $branch
 */
class IntegratedRepository extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     providerResourceId: string,
     *     branch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
