<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property ThirdPartyJobData|null $data
 * @property string|null $nonce
 */
class ThirdPartyJobDetails extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     data?: ThirdPartyJobData|null,
     *     nonce?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
