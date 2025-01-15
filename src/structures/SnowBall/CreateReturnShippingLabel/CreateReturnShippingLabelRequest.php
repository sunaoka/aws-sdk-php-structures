<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateReturnShippingLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 */
class CreateReturnShippingLabelRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
