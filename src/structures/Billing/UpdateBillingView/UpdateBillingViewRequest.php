<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property Shapes\Expression $dataFilterExpression
 */
class UpdateBillingViewRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     description?: string,
     *     dataFilterExpression?: Shapes\Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
