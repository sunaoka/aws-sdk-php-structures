<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\Expression|null $dataFilterExpression
 */
class UpdateBillingViewRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     dataFilterExpression?: Shapes\Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
