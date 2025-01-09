<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property ThirdPartyJobData $data
 * @property string $nonce
 */
class ThirdPartyJobDetails extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     data?: ThirdPartyJobData,
     *     nonce?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
