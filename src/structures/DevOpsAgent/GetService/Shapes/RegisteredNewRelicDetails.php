<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'US'|'EU' $region
 * @property string|null $description
 */
class RegisteredNewRelicDetails extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     region: 'US'|'EU',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
