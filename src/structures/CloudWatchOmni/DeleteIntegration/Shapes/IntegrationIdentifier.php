<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $integrationId
 * @property string|null $integrationArn
 * @property string|null $integrationName
 */
class IntegrationIdentifier extends Shape
{
    /**
     * @param array{
     *     integrationId?: string|null,
     *     integrationArn?: string|null,
     *     integrationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
